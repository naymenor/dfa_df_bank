<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\CustomerDocument;
use App\other\Response;
class CustomerDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        try {
            $validate = Validator::make(
                $request->all(),
                [
                    'type' => 'required',
                    'file' => 'required',
                ]
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
                $document = CustomerDocument::where('customer_id', $request->customer_id)->first();
                if (is_null($document)) {
                    $document = CustomerDocument::create([
                        'uuid' => $uuid,
                        'customer_id' => $request->customer_id,
                        'status' => 0,
                    ]);
                }

                $file = null;
                $file_name = null;
                $ext = null;
                $path = null;


                if ($request->hasFile("file")) {
                    $file = $request->file('file');
                    $file_name = time() . '.' . $file->getClientOriginalExtension();
                    $ext = $file->getClientOriginalExtension();
                    $path = "image/customer/document/" . $file_name;
                    $file->move('image/customer/document/', $file_name);

                    $document_array = ["type" => $request->type, "path" => $path, "file" => $file_name];

                    if ($request->type == "nid") {
                        $document->nid = json_encode($document_array);
                    }
                    if ($request->type == "passport") {
                        $document->passport = json_encode($document_array);
                    }
                    if ($request->type == "utility_bill") {
                        $document->utility_bill = json_encode($document_array);
                    }
                    if ($request->type == "bank_statement") {
                        $document->bank_statement = json_encode($document_array);
                    }
                    if ($request->type == "loan_statement") {
                        $document->loan_statement = json_encode($document_array);
                    }
                    if ($request->type == "visiting_card") {
                        $document->visiting_card = json_encode($document_array);
                    }

                    if ($request->type == "bank_cheque") {
                        $document->bank_cheque = json_encode($document_array);
                    }
                    if ($request->type == "office_id") {
                        $document->office_id = json_encode($document_array);
                    }
                    if ($request->type == "nom_photo") {
                        $document->nom_photo = json_encode($document_array);
                    }
                    if ($request->type == "nom_nid") {
                        $document->nom_nid = json_encode($document_array);
                    }
                    if ($request->type == "payslip") {
                        $document->payslip = json_encode($document_array);
                    }

                    $document->save();

                    return response()->json([
                        'success' => true,
                        'message' => 'Document added Successfully',
                    ], 200);
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
