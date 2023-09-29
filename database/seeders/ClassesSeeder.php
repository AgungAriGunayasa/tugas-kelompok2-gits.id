<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['class' => 'X', 'cost' => 300000],
            ['class' => 'XI', 'cost' => 400000],
            ['class' => 'XII', 'cost' => 500000],
        ];

        foreach ($data as $classData) {
            $class = new Classes($classData);

            $class->save();
        }
    }
}
