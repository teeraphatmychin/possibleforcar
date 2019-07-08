<?php

namespace App\Http\Controllers;
use App\list_car;
use Illuminate\Http\Request;

class car_manageController extends Controller
{
    //
    public function index()
    {
        $data = list_car::latest()->paginate(10);
        return view('possiblecar4.file_car.car_index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('possiblecar4.file_car.car_create');
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
            'brand'    =>  'required',
            'model'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'brand'       =>   $request->brand,
            'model'        =>   $request->model,
            'image'            =>   $new_name,
            'year_model' => $request->year_model,
            'price' => $request->price,
            'sum_price' => $request->sum_price,
            'type_car' => $request->type,
            'engine' => $request->engine,
            'detail' => $request->detail,
            'title' => $request->title,
            'status_car' => $request->status_car,
            
        );

        list_car::create($form_data);

        return redirect('car_crud')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = list_car::findOrFail($id);
        return view('possiblecar4.file_car.car_view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = list_car::findOrFail($id);
        return view('possiblecar4.file_car.car_edit', compact('data'));
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
        $image = $request->file('car_image');
        if($image != '')
        {
            $request->validate([
                'brand'    =>  'required',
                'model'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'brand'    =>  'required',
                'model'     =>  'required'
            ]);
        }

        $form_data = array(
            'brand'       =>   $request->brand,
            'model'        =>   $request->model,
            'image'            =>   $image_name,
            'year_model' => $request->year_model,
            'price' => $request->price,
            'type' => $request->type,
            'engine' => $request->engine,
            'detail' => $request->detail,
            'title' => $request->title,
            'status_car' => $request->status_car
            
        );
  
        list_car::whereId($id)->update($form_data);

        return redirect('car_crud')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = list_car::findOrFail($id);
        $data->delete();

        return redirect('car_crud')->with('success', 'Data is successfully deleted');
    }

}
