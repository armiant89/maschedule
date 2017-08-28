<?php

use Illuminate\Database\Seeder;

class PerformancesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('performances')->delete();
        
        \DB::table('performances')->insert(array (
            0 => 
            array (
                'id' => 1,
                'period_id' => 1,
                'performance_date' => '2017-08-27 15:00:00',
                'created_at' => '2017-08-28 11:36:14',
                'updated_at' => '2017-08-28 11:36:14',
            ),
            1 => 
            array (
                'id' => 2,
                'period_id' => 1,
                'performance_date' => '2017-08-30 19:00:46',
                'created_at' => '2017-08-28 11:36:25',
                'updated_at' => '2017-08-28 11:36:25',
            ),
        ));
        
        
    }
}