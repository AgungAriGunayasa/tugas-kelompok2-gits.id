<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data = [
            ['nis' => '10001', 'name' => 'Andi', 'address' => 'jl.jalan', 'telp' => '12345', 'ekskul_id' => 1, 'class_id' => 1],
            ['nis' => '10002', 'name' => 'Rima', 'address' => 'jl.jalan', 'telp' => '12345', 'ekskul_id' => 2, 'class_id' => 1],
            ['nis' => '10003', 'name' => 'Tono', 'address' => 'jl.jalan', 'telp' => '12345', 'ekskul_id' => 3, 'class_id' => 1],
        ];

        foreach ($data as $studentData) {
            $student = new Students($studentData);

            $student->save();
        }
    }
}
