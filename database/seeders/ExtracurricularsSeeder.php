<?php

namespace Database\Seeders;

use App\Models\Extracurriculars;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtracurricularsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'sepak bola', 'cost' => 50000],
            ['name' => 'basket', 'cost' => 50000],
            ['name' => 'renang', 'cost' => 75000],
        ];

        foreach ($data as $extracurricularData) {
            $extracurricular = new Extracurriculars($extracurricularData);

            $extracurricular->save();
        }
    }
}
