<?php

namespace App\Http\Controllers;

use App\Models\EmiParameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Auth;


class EmiParameterController extends Controller
{
    public function index()
    {


        $emis = EmiParameter::get();

        if ($emis) {
            return response()->json([
                'success' => true,
                'message' => 'Data retrieved successfully',
                'data' => $emis
            ], 200);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $validate = Validator::make(
                $request->all(),
                [
                    'duration' => 'required',
                    'interest_rate' => 'required',
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


                $emi = EmiParameter::create([
                    'uuid' => $uuid,
                    // 'bank_id' => Auth::user()->bank->id,
                    'emi_no' => $request->emi_no,
                    'title' => $request->title,
                    'duration' => $request->duration,
                    'process_fee' => $request->process_fee,
                    'down_payment' => $request->down_payment,
                    'interest_rate' => $request->interest_rate,
                    'status' => 1,


                ]);

                if ($emi) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Emi created Successfully',
                        'data' => $emi
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
     * Show the specified resource.
     */
    public function show($id)
    {
        $findEmi = EmiParameter::where('uuid',$id)->first();
        if ($findEmi) {
            return response()->json([
                'success' => true,
                'message' => 'Data retrieved successfully',
                'data' => $findEmi
            ], 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('bank::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
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

                $findEmi = EmiParameter::where('uuid',$id)->first();
                if (!$findEmi) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Emi not found'
                    ], 404);
                }

                $emiupdate = $request->only([
                    'uuid',
                    'bank_id',
                    'emi_no',
                    'title',
                    'duration',
                    'process_fee',
                    'interest_rate',
                    'down_payment',
                    'status',

                ]);
                $findEmi->update($emiupdate);

                if ($findEmi) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Emi created Successfully',
                        'data' => $findEmi
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
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $findEmi = EmiParameter::where('uuid',$id)->first();
        $findEmi->delete();
            return response()->json([
                'success' => true,
                'message' => 'Emi Deleted Successfully',
            ], 202);
        
    }
}
