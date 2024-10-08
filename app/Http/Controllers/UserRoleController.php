<?php

namespace App\Http\Controllers;

use App\Models\userRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Auth;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userRole = userRole::get();

        if ($userRole) {
            return response()->json([
                'success' => true,
                'message' => 'Data retrieved successfully',
                'data' => $userRole
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
                    'user_id' => 'required',
                    'role_name' => 'required',
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
                $userrole = userRole::create([
                    'user_id' => $request->user_id,
                    'role_name' => $request->role_name,
                    'status' => 1,
                ]);

                if ($userrole) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Role created Successfully',
                        'data' => $userrole
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
                $findrole = userRole::where('id',$id)->first();
                if (!$findrole) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Role not found'
                    ], 404);
                }
                $roleupdate = $request->only([
                    'user_id',
                    'role_name',
                    'status',

                ]);
                $findrole->update($roleupdate);

                if ($findrole) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Role Updated Successfully',
                        'data' => $findrole
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
    public function destroy(string $id)
    {
        //
    }
}
