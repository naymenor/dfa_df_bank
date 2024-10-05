<?php

namespace App\Http\Controllers;

use App\Models\BankStatementInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Auth;


class BankStatementInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $BankStatementInfo = BankStatementInfo::all();

        if ($BankStatementInfo) {
            return response()->json([
                'success' => true,
                'message' => 'Data retrieved successfully',
                'data' => $BankStatementInfo
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $BankStatementInfo = BankStatementInfo::where('customer_id', $id)->first();

        if ($BankStatementInfo) {
            return response()->json([
                'success' => true,
                'message' => 'Data retrieved successfully',
                'data' => $BankStatementInfo
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
