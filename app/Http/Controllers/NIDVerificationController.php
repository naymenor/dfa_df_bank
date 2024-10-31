<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NIDVerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function nid_verification(Request $request)
    {
        $response = Http::withoutVerifying()->post('https://uatapi.dhakabank.com.bd:8080/ApiPorichoy/api/Porichy/UserLogin', [
            'username' => "DFA_Vendor",
            'password' => "FQ83F/4tlzormrNfc1H1xq53eprxYOhgVt9tWnm1DWA="
        ]);

        // Check for success
        if ($response->successful()) {
            $token = $response['token']['Token'];
             $data = [
                'national_id' => $request->national_id,
                "team_tx_id" => $request->team_tx_id,
                "english_output" => true,
                "person_dob" => $request->person_dob,
                "person_photo" =>  $request->person_photo,
             ];
            $response1 = Http::withoutVerifying()->withToken($token)->post('https://uatapi.dhakabank.com.bd:8080/ApiPorichoy/api/Porichy/Porichoy Api', $data);
            return response()->json([
                'message' => 'Success',
                'data' => $response1,
            ]);
        } else {
            // Handle login failure
            return response()->json([
                'message' => 'Failed to log in to the external API',
                'error' => $response->json(),
            ], $response->status());
        }
    }
    public function index()
    {
        // Send a POST request with credentials

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
