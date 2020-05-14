<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
        
        if(request()->ajax())
        {  
            return datatables()->of(list_customer::latest()->get())
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.customer_manage');
   
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
            $data = list_customer::findOrFail($id);
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
        $data = list_customer::findOrFail($id);
        $data->delete();  
    }
}


