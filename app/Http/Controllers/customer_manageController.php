<?php

namespace App\Http\Controllers;
use App\list_customer;
use Illuminate\Http\Request;

class customer_manageController extends Controller
{
    //
    public function index()
    {
        $data = list_customer::latest()->paginate(10);
        return view('possiblecar4.file_customer.customer_index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('possiblecar4.file_customer.customer_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_name'    =>  'required',
            'customer_phone'     =>  'required',
            
        ]);

        
        $form_data = array(
            'customer_name'       =>   $request->customer_name,
            'customer_phone'        =>   $request->customer_phone,
            'brand'        =>   $request->brand,
            'model'        =>   $request->model,
            'year_model'        =>   $request->year_model,
            'interest'        =>   $request->interest,
            'customer_status' => $request->customer_status,
            'sell_name' => $request->sell_name
        );

        list_customer::create($form_data);

        return redirect('customer_crud')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = list_customer::findOrFail($id);
        return view('possiblecar4.file_customer.customer_view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = list_customer::findOrFail($id);
        return view('possiblecar4.file_customer.customer_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('customer_image');
        if($image != '')
        {
            $request->validate([
                'customer_name'    =>  'required',
                'customer_phone'     =>  'required',
                // 'image'         =>  'image|max:2048'
            ]);

            // $image_name = rand() . '.' . $image->getClientOriginalExtension();
            // $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'customer_name'    =>  'required',
                'customer_phone'     =>  'required'
            ]);
        }

        $form_data = array(
            'customer_name'       =>   $request->customer_name,
            'customer_phone'        =>   $request->customer_phone,
            'image'            =>   $image_name,
            'brand'        =>   $request->brand,
            'model'        =>   $request->model,
            'year_model'        =>   $request->year_model,
            'interest'        =>   $request->interest,
            'customer_status' => $request->customer_status
        );
  
        list_customer::whereId($id)->update($form_data);

        return redirect('customer_crud')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = list_customer::findOrFail($id);
        $data->delete();

        return redirect('customer_crud')->with('success', 'Data is successfully deleted');
    }
}
