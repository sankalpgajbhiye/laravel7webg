<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name'        => 'Admin',
                'last_name'         => 'Gurukul',
                'mobile'            => '9999999999',
                'email'             => 'admin@webgurukul.com',
                'password'          => Hash::make('password'),
                'role_id'           => 1,
                'gender'            => 'male',
                'status'            => true,
                'created_at'        => date("Y-m-d H:i:s"),
                'updated_at'        => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
