<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locations')->delete();
        
        \DB::table('locations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'city_id' => 2,
                'name' => 'Wien Staatsoper',
                'created_at' => '2017-08-28 10:06:46',
                'updated_at' => '2017-08-28 10:06:46',
            ),
            1 => 
            array (
                'id' => 2,
                'city_id' => 5,
                'name' => 'Metropolitan Opera',
                'created_at' => '2017-08-28 10:07:10',
                'updated_at' => '2017-08-28 10:07:10',
            ),
            2 => 
            array (
                'id' => 3,
                'city_id' => 4,
                'name' => 'Zurich Operhaus',
                'created_at' => '2017-08-28 10:07:21',
                'updated_at' => '2017-08-28 10:07:21',
            ),
            3 => 
            array (
                'id' => 4,
                'city_id' => 3,
                'name' => 'Chicago Lyric',
                'created_at' => '2017-08-28 10:07:35',
                'updated_at' => '2017-08-28 10:07:35',
            ),
            4 => 
            array (
                'id' => 5,
                'city_id' => 6,
                'name' => 'London Convent Garden',
                'created_at' => '2017-08-28 10:07:53',
                'updated_at' => '2017-08-28 10:07:53',
            ),
            5 => 
            array (
                'id' => 6,
                'city_id' => 1,
                'name' => 'Salzburg',
                'created_at' => '2017-08-28 10:09:54',
                'updated_at' => '2017-08-28 10:09:54',
            ),
            6 => 
            array (
                'id' => 7,
                'city_id' => 7,
                'name' => 'Oman',
                'created_at' => '2017-08-28 10:10:04',
                'updated_at' => '2017-08-28 10:10:04',
            ),
            7 => 
            array (
                'id' => 8,
                'city_id' => 8,
                'name' => 'Munich Staatsoper',
                'created_at' => '2017-08-28 10:10:15',
                'updated_at' => '2017-08-28 10:10:15',
            ),
        ));
        
        
    }
}