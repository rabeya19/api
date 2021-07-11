<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            DB::table('reviews')->insert([
            [
                    'product_id'=> 1,
                    'customer'=> "Mustofa",
                    'review'=>"Amazing product",
                    'star'=>"3"
            ],
            [
            'product_id'=> 2,
            'customer'=> "Mustofa",
            'review'=>"Amazing",
            'star'=>"5"
            ],
            [
                'product_id'=> 3,
                'customer'=> "Faukrul",
                'review'=>"Nice experince",
                'star'=>"4"
            ],
            [
                'product_id'=> 4,
                'customer'=> "Anika Tabassum",
                'review'=>"Enjoying it..",
                'star'=>"4"
            ],
            [
                'product_id'=> 5,
                'customer'=> "Kamal Choudhuray",
                'review'=>"Easy to use..must recommended",
                'star'=>"5"
            ],
            [
                'product_id'=> 6,
                'customer'=> "tomal Hasan",
                'review'=>"Satisfied",
                'star'=>"4"
            ],
            [
                'product_id'=> 7,
                'customer'=> "Ahsan kabir",
                'review'=>"High Quality",
                'star'=>"5"
            ],
            [
                'product_id'=> 8,
                'customer'=> "Pranto Shahan",
                'review'=>"Satisfied",
                'star'=>"4"
            ],
            [
                'product_id'=> 9,
                'customer'=> "Mirza Hasan",
                'review'=>"Not a good product.",
                'star'=>"2"
            ],
            [
                'product_id'=> 10,
                'customer'=> "Zhahangir Kabir",
                'review'=>"Easy Maintenance",
                'star'=>"4"
            ],
            [
                'product_id'=> 1,
                'customer'=> "Zahanara Imam",
                'review'=>"100% recommended",
                'star'=>"5"
            ],
            [
                'product_id'=> 2,
                'customer'=> "Afsara Taposhi",
                'review'=>"Looking forward to buying their more product",
                'star'=>"5"
            ],
            [
                'product_id'=> 3,
                'customer'=> "Afif Zamal",
                'review'=>"Saves a lot of electricity",
                'star'=>"4"
            ]
            ]);

        
    }
}
