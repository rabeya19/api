<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
            'name'=>'lamia',
            'email'=>'lamia@gmail.com',
            'password'=> Hash::make('2222')
            ],
            [
                'name'=>'Rabeya',
                'email'=>'Rabeya@gmail.com',
                'password'=> Hash::make('2222')
            ],
            [
                'name'=>'Shahanara',
                'email'=>'Shahanara@gmail.com',
                'password'=> Hash::make('2222')
            ],
            [
                'name'=>'Mira',
                'email'=>'Mira@gmail.com',
                'password'=> Hash::make('2222')
            ],
            [
                'name'=>'Ara',
                'email'=>'Ara@gmail.com',
                'password'=> Hash::make('2222')
            ]


        ]);
    }
}
