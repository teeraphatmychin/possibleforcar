<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\list_sale;

use Validator;
class AjaxSaleManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        if(request()->ajax())
        {  
            return datatables()->of(list_sale::latest()->get())
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('sale_manage');
       
       
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'sale_name'    =>  'required',
            
           
        );
        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'sale_name'       =>   $request->sale_name,
            'sale_phone'        =>   $request->sale_phone,
            'sale_social' =>$request->customer_social,
            'showroom'  =>$request->showroom,
            'province' => $request->province,
    
            
        );

        list_sale::create($form_data);

        return response()->json(['success' => 'ข้อมูลของท่านถูกส่งแล้ว จะมีเจ้าหน้าที่ติดต่อภายใน 24 ชม.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = list_sale::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $rules = array(
            'sale_name'    =>  'required',
            
           
        );
        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'sale_name'       =>   $request->sale_name,
            'sale_phone'        =>   $request->sale_phone,
            'sale_social' =>$request->customer_social,
            'showroom'  =>$request->showroom,
            'province' => $request->province,
    
            
        );

        list_sale::create($form_data);

        return response()->json(['success' => 'ข้อมูลของท่านถูกส่งแล้ว จะมีเจ้าหน้าที่ติดต่อภายใน 24 ชม.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = list_sale::findOrFail($id);
        $data->delete();
    }
}


