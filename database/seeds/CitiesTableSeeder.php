<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'timezone_id' => 1,
                'name' => 'Salzburg',
                'created_at' => '2017-08-28 10:00:41',
                'updated_at' => '2017-08-28 10:05:26',
            ),
            1 => 
            array (
                'id' => 2,
                'timezone_id' => 1,
                'name' => 'Wien',
                'created_at' => '2017-08-28 10:00:46',
                'updated_at' => '2017-08-28 10:05:30',
            ),
            2 => 
            array (
                'id' => 3,
                'timezone_id' => 2,
                'name' => 'Chicago',
                'created_at' => '2017-08-28 10:00:54',
                'updated_at' => '2017-08-28 10:05:36',
            ),
            3 => 
            array (
                'id' => 4,
                'timezone_id' => 5,
                'name' => 'Zurich',
                'created_at' => '2017-08-28 10:01:03',
                'updated_at' => '2017-08-28 10:05:42',
            ),
            4 => 
            array (
                'id' => 5,
                'timezone_id' => 4,
                'name' => 'New York City',
                'created_at' => '2017-08-28 10:01:18',
                'updated_at' => '2017-08-28 10:05:49',
            ),
            5 => 
            array (
                'id' => 6,
                'timezone_id' => 6,
                'name' => 'London',
                'created_at' => '2017-08-28 10:01:35',
                'updated_at' => '2017-08-28 10:05:55',
            ),
            6 => 
            array (
                'id' => 7,
                'timezone_id' => 7,
                'name' => 'Oman',
                'created_at' => '2017-08-28 10:03:56',
                'updated_at' => '2017-08-28 10:06:02',
            ),
            7 => 
            array (
                'id' => 8,
                'timezone_id' => 3,
                'name' => 'Munich',
                'created_at' => '2017-08-28 10:08:13',
                'updated_at' => '2017-08-28 10:08:13',
            ),
        ));
        
        
    }
}