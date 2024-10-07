<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\CreditScoreParameter;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'DF User',
            'email' => 'dfadmin@df.com',
            'password' => Hash::make('password'), // Encrypt the password
        ]);

        $parameters = [
            [
                'ParameterName' => 'Regular Cashflow Earning',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Average Monthly Closing Balance',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Employment History',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Credit Utilization Ratio',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Debit_to_IncomeRatio',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Credit History and Behavior',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Credit History',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Recent Credit Inquiries',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'CreditAge',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Credit Mix_Types of Credit',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Behavioraland Psychological Factors',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'CIB',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Expenditure Pattern',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Financial Literacy and Education',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Psychological Traits',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Savings and Investment Behavior',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Demographic and Socioeconomic Background',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'The Highest Level of Education',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Professional Position',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Social and Economic Background',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
            [
                'ParameterName' => 'Personal Integrity',
                'HighScore' => 50,
                'MinEligibleScore' => 100,
                'cs_date' => '2024-05-19',
                'requredata' => 1,
                'action' => 'Accept',
                'status' => 1
            ],
        ];

        foreach ($parameters as $parameter) {
            CreditScoreParameter::create(array_merge($parameter, [
                'id' => Str::uuid(),
                'data_source' => 'SYSTEM',
                'created_by' => 'SYSTEM',
            ]));
        }
    }
}
