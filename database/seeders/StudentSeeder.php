<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710029',
            'name' => 'Nissa Nursabrina',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '085707503180',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710121',
            'name' => 'Raden Dimas Erlangga',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '081259945857',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710082',
            'name' => 'Reihan Amru',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '085645510533',
        ]);
    }
}
