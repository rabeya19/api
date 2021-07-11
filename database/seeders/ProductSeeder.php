<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        
            DB::table('products')->insert([
            [
            'name'=> 'Samsung Galaxy A71 | Pris',
            'detail'=>"Whether the moment calls for a close-up, an ultra-wide shot",
            'price'=>34999,
            'stock'=>"10",
            'discount'=> 10,
            'user_id' => 1
            ],

            [
                'name'=> 'Samsung Front Loading Washing Machine -WF600B0BHWQ - 6.0 Kg',
                'detail'=>"Wash, dry & save energy by washing large loads of laundry at low temperature",
                'price'=>53900,
                'stock'=>"5",
                'discount'=> 13,
                'user_id' => 3
                ],
                [
                    'name'=> 'Samsung Front Loading Washing Machine | WW12R641U0M | ',
                    'detail'=>"Wash, dry & save energy by washing large loads of laundry at low temperature",
                    'price'=>67900,
                    'stock'=>"1",
                    'discount'=> 12,
                    'user_id' => 5
                ],
                [
                    'name'=> ' Hitachi High Power Cyclon',
                    'detail'=>"Now you can say bye bye to dirt and pollution and take a deep  breath in you clean house",
                    'price'=>63020,
                    'stock'=>"5",
                    'discount'=> 8,
                    'user_id' => 2
                ],
                [
                    'name'=> 'Samsung Inverter Split AC | AR24MVFHGWKZ | 2.0 Tons',
                    'detail'=>"Keeps comfortably cool|Stable performance|Enjoy good night’s sleep|Triple Protector Plus|DURAFIN™|Works Smart. Saves Energy",
                    'price'=>98400,
                    'stock'=>"5",
                    'discount'=> 6,
                    'user_id' => 4
                ],
                [
                    'name'=> 'Samsung 55" 4K Smart UHD TV | UA55TU8000RSER | Series 8',
                    'detail'=>"The power to use easily|See the stunning detail HDR|",
                    'price'=>108900,
                    'stock'=>"11",
                    'discount'=> 15,
                    'user_id' => 1
                ],
                [
                    'name'=> 'Samsung 43"4K Smart UHD TV | UA43RU7470USER | Series 7',
                    'detail'=>"Dynamic Crystal Color, see it real|HDR, see more details|UHD ProcessorAirplay 2",
                    'price'=>59000,
                    'stock'=>"13",
                    'discount'=> 6,
                    'user_id' => 4
                ],
                [
                    'name'=> 'Samsung Front Loading Washing Machine -WF600B0BHWQ - 6.0 Kg',
                    'detail'=>"Wash, dry & save energy by washing large loads of laundry at low temperature",
                    'price'=>53900,
                    'stock'=>"5",
                    'discount'=> 13,
                    'user_id' => 2
                    ],
                    [
                        'name'=> 'Samsung Front Loading Washing Machine | WW12R641U0M | ',
                        'detail'=>"Wash, dry & save energy by washing large loads of laundry at low temperature",
                        'price'=>67900,
                        'stock'=>"1",
                        'discount'=> 12,
                        'user_id' => 3
                    ],
                    [
                        'name'=> ' Hitachi High Power Cyclon',
                        'detail'=>"Now you can say bye bye to dirt and pollution and take a deep  breath in you clean house",
                        'price'=>11400,
                        'stock'=>"5",
                        'discount'=> 8,
                        'user_id' => 1
                    ]
                
            ]);
        
    }
}
