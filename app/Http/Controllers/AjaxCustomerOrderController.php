<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\list_car;
use App\list_customer;
use Validator;
class AjaxCustomerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        //$detail_car=list_car::findOrFail($id);
        $slide_similars=list_car::all();
        
        if(request()->ajax())
        {  
           // $detail_car=list_car::findOrFail($id);        
        }
        return view('detailtemp-car',compact('slide_similars'));
       
       
   
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
            'customer_name'    =>  'required',
            
           
        );
        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'customer_name'       =>   $request->customer_name,
            'customer_phone'        =>   $request->customer_phone,
            'brand'        =>   $request->brand,
            'model'        =>   $request->model,
            'year_model'        =>   $request->year_model,
            'interest'        =>   $request->interest,
            'customer_status' => $request->customer_status,
            'customer_social' =>$request->customer_social,
            'car_down'  =>$request->car_down,
            'installment' => $request->installment,
            
        );

        list_customer::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}


