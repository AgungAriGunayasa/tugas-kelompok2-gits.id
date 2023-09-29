<?php

namespace Database\Seeders;

use App\Models\Payments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['payment_date' => '2023/09/29', 'cost' => '100000', 'total' => '100000', 'status' => 'Lunas', 'nis' => 1]
        ];

        foreach($data as $paymentsData) {
            $payment = new Payments($paymentsData);

            $payment->save();
        }
    }
}
