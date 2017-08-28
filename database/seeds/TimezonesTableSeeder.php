<?php

use Illuminate\Database\Seeder;

class TimezonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('timezones')->delete();
        
        \DB::table('timezones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Europe/Vienna',
                'created_at' => '2017-08-28 09:58:30',
                'updated_at' => '2017-08-28 09:58:30',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'America/Chicago',
                'created_at' => '2017-08-28 09:58:54',
                'updated_at' => '2017-08-28 09:58:54',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Europe/Monaco',
                'created_at' => '2017-08-28 09:59:03',
                'updated_at' => '2017-08-28 09:59:22',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'America/New_York',
                'created_at' => '2017-08-28 09:59:34',
                'updated_at' => '2017-08-28 09:59:34',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Europe/Zurich',
                'created_at' => '2017-08-28 10:00:00',
                'updated_at' => '2017-08-28 10:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Europe/London',
                'created_at' => '2017-08-28 10:00:27',
                'updated_at' => '2017-08-28 10:00:27',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Asia/Makassar',
                'created_at' => '2017-08-28 10:03:43',
                'updated_at' => '2017-08-28 10:03:43',
            ),
        ));
        
        
    }
}