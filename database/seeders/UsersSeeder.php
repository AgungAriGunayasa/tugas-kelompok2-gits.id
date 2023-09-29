<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['username' => 'admin', 'password' => 'admin']
        ];

        foreach($data as $usersData) {
            $user = new Users($usersData);

            $user->save();
        }
    }
}
