<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'usertype'=>'admin',
            'password'=>Hash::make(123456789),
            'addrees'=>'yahmour-trtous-syria',
            'phone'=>123456789,
        ]);
    }
}
