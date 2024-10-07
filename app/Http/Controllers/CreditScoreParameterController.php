<?php

namespace App\Http\Controllers;

use App\Models\CreditScoreParameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Auth;


class CreditScoreParameterController extends Controller
{
    public function index()
    {
        //  $creditScoreActive = CreditScore::where('status',1)->paginate(5);
        //  $creditScoreInctive = CreditScore::where('status',0)->paginate(5);
        // $creditScore = [];
        // $creditScore = [
        //     "FinancialStabilityandCapacity" => [
        //         "RegularCashflowEarning" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "AverageMonthlyClosingBalance" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "EmploymentHistory" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "CreditUtilizationRatio" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "Debit_to_IncomeRatio" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "CreditHistoryandBehavior" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ]
        //     ],
        //     "PaymentBehavior" => [
        //         "CreditHistory" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "RecentCreditInquiries" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "CreditAge" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "CreditMix_TypesofCredit" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "BehavioralandPsychologicalFactors" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "CIB" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ]
        //     ],
        //     "ResidentialStability" => [
        //         "ExpenditurePattern" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "FinancialLiteracyandEducation" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "PsychologicalTraits" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "SavingsandInvestmentBehavior" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "DemographicandSocioeconomicBackground" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ]
        //     ],
        //     "AGE" => [
        //         "TheHighestLevelofEducation" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "ProfessionalPosition" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "SocialandEconomicBackground" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ],
        //         "PersonalIntegrity" => [
        //             "HighScore" => 50,
        //             "MinEligibleScore" => 100,
        //             "CSDate" => "2024-05-19",
        //             "Required" => 1,
        //             "Action" => "Accept",
        //             "Status" => 1
        //         ]
        //     ]
        // ];
        // $creditScore = [
        //     'Active'=>$creditScoreActive,
        //     'Inactive'=>$creditScoreInctive
        // ];

        // $creditScore = CreditScoreParameter::orderBy('id', 'desc')->get(); 
        $creditScoreActive = CreditScoreParameter::where('status', 1)->get();
        $creditScoreInctive = CreditScoreParameter::where('status', 0)->get();
        $creditScores = [];
        $creditScores = [
            'Active' => $creditScoreActive,
            'Inactive' => $creditScoreInctive
        ];

        if ($creditScores) {

            return response()->json([
                'success' => true,
                'message' => 'Data retrieved successfully',
                'data' => $creditScores
            ], 200);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bank::create');
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
                    'ParameterName' => 'required',
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
                $score = CreditScoreParameter::create([
                    'uuid' => $uuid,
                    // 'bank_id'=> 1,
                    'ParameterName' => $request->ParameterName,
                    'HighScore' => $request->HighScore,
                    'MinEligibleScore' => $request->MinEligibleScore,
                    'weight' => $request->weight,
                    'cs_date' => $request->cs_date,
                    'requredata' => $request->requredata,
                    'action' => $request->action,
                    'data_source' => 'BANK_WEB',
                    'created_by' => 'BANK_WEB',
                    'status' => $request->status,

                ]);

                if ($score) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Credit Score created Successfully',
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
        return view('bank::show');
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
                [],
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

                $score = CreditScoreParameter::where('uuid', $id)->first();

                if ($score) {
                    $score->status = 0;
                    $score->save();
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Product not found'
                    ], 404);
                }



                $uuid = Str::uuid()->toString();
                $scoredata = CreditScoreParameter::create([
                    'uuid' => $uuid,
                    // 'bank_id' => Auth::user()->bank->id,
                    'ParameterName' => $request->ParameterName,
                    'HighScore' => $request->HighScore,
                    'MinEligibleScore' => $request->MinEligibleScore,
                    'cs_date' => $request->cs_date,
                    'requredata' => $request->requredata,
                    'action' => $request->action,
                    'status' => 1,

                ]);





                if ($score) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Credit Score Update Successfully',
                        'data' => $scoredata
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
    }
}
