<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  =>  'admin',
            'email' =>  'admin@admin.com',
            'password'  =>  Hash::make('12345678'),
            'is_admin'  =>  1,
            'phone_number'=> '08123121412',
            'address'=> 'jl. xxxx',
            'driving_license'=> '123455678910',
        ]);
    }
}
