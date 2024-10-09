<?php

namespace App\Http\Controllers;

use App\Models\AssessmentReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Auth;
use App\Helper\FileUpload;


class AssessmentReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $assessmentreport = AssessmentReport::get();

        if ($assessmentreport) {
            return response()->json([
                'success' => true,
                'message' => 'Data retrieved successfully',
                'data' => $assessmentreport
            ], 200);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            $validate = Validator::make(
                $request->all(),
                [
                ],
                []
            );

            if ($validate->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation error',
                    'errors' => $validate->errors()
                ], 422);
            }

            if (Auth::check()) {

                $uuid = Str::uuid()->toString();


                $assessmentreport = AssessmentReport::create([
                    'uuid' => $uuid,
                    'customer_id' => $request->customer_id,
                    'bank_id' => 1,
                    'nid' => $request->nid,
                    'data_source' => 'DF CORE',
                    'created_by' => 'DF CORE',
                    'status' => 1,



                ]);

                if ($assessmentreport) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Emi created Successfully',
                        'data' => $assessmentreport
                    ], 202);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Some thing went worng',
                    ], 500);
                }
            }
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $findAr = AssessmentReport::where('customer_id',$id)->first();
        if ($findAr) {
            return response()->json([
                'success' => true,
                'message' => 'Data retrieved successfully',
                'data' => $findAr
            ], 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $uuid)
    {
        $customer = AssessmentReport::where('customer_id', $uuid)->first();
        if($customer){
            if($request->has('personal_info')){
                $customer->personal_info = $request->personal_info;
                // $customer->check_personal = 1;                
            }
            if($request->has('financial_information')){
                $customer->financial_information = $request->financial_information;
                $customer->check_financial = 1;
                new FileUpload($request,'customer/'.$uuid);
            }
            if($request->has('self_information')){
                $customer->self_information =$request->self_information;
                $customer->check_self = 1;
                new FileUpload($request,'customer/'.$uuid);    
            }
            if($request->has('nid_information')){
                $customer->nid_information = $request->nid_information;
                $customer->check_nid = 1;   
                new FileUpload($request,'customer/'.$uuid);
            }            
            if($request->has('nominee_information')){
                $customer->nominee_information = $request->nominee_information;
                $customer->check_nominee = 1;
                new FileUpload($request,'customer/'.$uuid);
            }
            if($request->has('address_information')){
                $customer->address_information =$request->address_information;
                $customer->check_address = 1;                  
                new FileUpload($request,'customer/'.$uuid);          
            }
            if($request->has('quesnaire')){
                $customer->quesnaire =$request->quesnaire;
                $customer->check_quesnaire = 1;                     
            }
            if($request->has('check_phone')){
                $customer->check_phone = $request->check_phone;
            }
            if($request->has('check_live_face')){
                $customer->check_live_face = $request->check_live_face;
            }
            if($request->has('mobile')){
                $customer->mobile = $request->mobile;
            }
            if($request->has('customer_acc_no')){
                $customer->customer_acc_no = $request->customer_acc_no;
            }
            $customer->save();
            return response()->json([
                'success' => true,
                'message' => 'Customer profile update successfully',
                'data' => $customer
            ]);
        }
        else
        {
            return response()->json([  
                'success' => false,
                'message' => 'Customer not found',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
