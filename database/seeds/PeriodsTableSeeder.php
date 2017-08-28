<?php

use Illuminate\Database\Seeder;

class PeriodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('periods')->delete();
        
        \DB::table('periods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'production_id' => 1,
                'location_id' => 6,
                'start' => '2017-08-28 10:38:32',
                'end' => '2017-08-30 00:00:00',
                'notes' => 'Stoyanova , Florez, Adbrazakov',
                'created_at' => '2017-08-28 10:11:21',
                'updated_at' => '2017-08-28 10:38:32',
            ),
            1 => 
            array (
                'id' => 2,
                'production_id' => 2,
                'location_id' => 1,
                'start' => '2017-09-01 00:00:00',
                'end' => '2017-09-06 00:00:00',
                'notes' => NULL,
                'created_at' => '2017-08-28 10:41:39',
                'updated_at' => '2017-08-28 10:41:39',
            ),
            2 => 
            array (
                'id' => 3,
                'production_id' => 3,
                'location_id' => 1,
                'start' => '2017-08-28 10:47:54',
                'end' => '2017-08-28 10:47:54',
                'notes' => 'Netrebko,Alvarez,Petean,D\'Intino',
                'created_at' => '2017-08-28 10:47:39',
                'updated_at' => '2017-08-28 10:48:01',
            ),
            3 => 
            array (
                'id' => 4,
                'production_id' => 4,
                'location_id' => 4,
                'start' => '2017-09-18 00:00:00',
                'end' => '2017-11-03 23:59:59',
                'notes' => 'Kensley,Polenzani,Feola,Svede,Tsymbalyuk',
                'created_at' => '2017-08-28 10:48:40',
                'updated_at' => '2017-08-28 10:48:40',
            ),
            4 => 
            array (
                'id' => 5,
                'production_id' => 5,
                'location_id' => 8,
                'start' => '2017-11-22 00:00:00',
                'end' => '2017-12-08 23:59:59',
                'notes' => 'Kaufmann,Harteros,Salsi',
                'created_at' => '2017-08-28 10:55:37',
                'updated_at' => '2017-08-28 10:55:37',
            ),
            5 => 
            array (
                'id' => 6,
                'production_id' => 6,
                'location_id' => 3,
                'start' => '2017-12-01 00:00:00',
                'end' => '2018-01-12 23:59:59',
                'notes' => 'Nagelstad,Jovanovic,Hendricks',
                'created_at' => '2017-08-28 10:56:01',
                'updated_at' => '2017-08-28 10:56:01',
            ),
            6 => 
            array (
                'id' => 7,
                'production_id' => 7,
                'location_id' => 2,
                'start' => '2018-02-12 00:00:00',
                'end' => '2018-03-10 23:59:59',
                'notes' => 'Yoncheva,Fabiano, Phillips,',
                'created_at' => '2017-08-28 10:56:31',
                'updated_at' => '2017-08-28 10:56:31',
            ),
            7 => 
            array (
                'id' => 8,
                'production_id' => 8,
                'location_id' => 2,
                'start' => '2018-02-12 00:00:00',
                'end' => '2018-03-17 23:59:59',
                'notes' => 'Yaho,Zifchak,Aronica,Frontali',
                'created_at' => '2017-08-28 10:56:55',
                'updated_at' => '2017-08-28 10:56:55',
            ),
            8 => 
            array (
                'id' => 9,
                'production_id' => 9,
                'location_id' => 2,
                'start' => '2018-03-08 00:00:00',
                'end' => '2018-04-07 23:59:59',
                'notes' => 'Serafin,Yu,Alvarez,Tsymbalyuk',
                'created_at' => '2017-08-28 10:57:31',
                'updated_at' => '2017-08-28 10:57:31',
            ),
        ));
        
        
    }
}