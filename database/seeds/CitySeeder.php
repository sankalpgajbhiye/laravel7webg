<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
                'city_name'      => 'Akola',
                'state_name'     => 'maharashtra',
                'country_name'   => 'india',
            ],
            [
                'city_name'      => 'Amrawati',
                'state_name'     => 'maharashtra',
                'country_name'   => 'india',
            ],
        ]);
    }
}







// DB::table('cities')->insert([
//     [
//         'city_name'      => 'Akola',
//         'state_name'     => 'maharashtra',
//         'country_name'   => 'india',
//         'created_at'     => date("Y-m-d H:i:s"),
//         'updated_at'     => date("Y-m-d H:i:s")
//     ],
//     [
//         'city_name'      => 'Amrawati',
//         'state_name'     => 'maharashtra',
//         'country_name'   => 'india',
//         'created_at'     => date("Y-m-d H:i:s"),
//         'updated_at'     => date("Y-m-d H:i:s")
//     ],
//     [
//         'city_name'      => 'Bhopal',
//         'state_name'     => 'madhya pradesh',
//         'country_name'   => 'india',
//         'created_at'     => date("Y-m-d H:i:s"),
//         'updated_at'     => date("Y-m-d H:i:s")
//     ]
// ]);
