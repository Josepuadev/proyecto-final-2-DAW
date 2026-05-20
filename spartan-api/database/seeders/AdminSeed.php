<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'      =>  'spartanadmin',
            'email'     =>  env('MAIL_ADMIN'),
            'password'  =>  Hash::make(env('PASSWORD_ADMIN')),
        ]);
    }
}
