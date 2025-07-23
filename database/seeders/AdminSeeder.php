<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name'=>'Admin Party Neraka',
                'email'=>'admin@partyneraka.com',
                'password'=>Hash::make('admin123'),
            ],
        ];

        foreach($admins as $admin){
            User::create($admin);
        }

    }
}
