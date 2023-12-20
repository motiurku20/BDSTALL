<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Jinia',
                'email' => 'jinia@gmail.com',
                'password' => '11111111'
            ],
            [
                'name' => 'Jinia',
                'email' => 'jiniaa@gmail.com',
                'password' => '11111111'
            ]
        ];
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
