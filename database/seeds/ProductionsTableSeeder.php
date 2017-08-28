<?php

use Illuminate\Database\Seeder;

class ProductionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('productions')->delete();
        
        \DB::table('productions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Lucrezia Borgia',
                'created_at' => '2017-08-28 09:54:16',
                'updated_at' => '2017-08-28 09:54:16',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Il Barbiere di Siviglia',
                'created_at' => '2017-08-28 09:54:30',
                'updated_at' => '2017-08-28 09:54:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Il Trovatore',
                'created_at' => '2017-08-28 09:54:39',
                'updated_at' => '2017-08-28 09:54:39',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Rigoletto',
                'created_at' => '2017-08-28 09:54:44',
                'updated_at' => '2017-08-28 09:54:44',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Andrea Chenier',
                'created_at' => '2017-08-28 09:54:53',
                'updated_at' => '2017-08-28 09:54:53',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Fanciulla del West',
                'created_at' => '2017-08-28 09:55:00',
                'updated_at' => '2017-08-28 09:55:00',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'La Bohème',
                'created_at' => '2017-08-28 09:55:20',
                'updated_at' => '2017-08-28 09:55:20',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Madama Butterfly',
                'created_at' => '2017-08-28 09:55:27',
                'updated_at' => '2017-08-28 09:55:27',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Turandot',
                'created_at' => '2017-08-28 09:55:33',
                'updated_at' => '2017-08-28 09:55:33',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Sansone e Dalila',
                'created_at' => '2017-08-28 09:55:47',
                'updated_at' => '2017-08-28 09:55:47',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Traviata',
                'created_at' => '2017-08-28 09:55:53',
                'updated_at' => '2017-08-28 09:55:53',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Gala',
                'created_at' => '2017-08-28 09:55:58',
                'updated_at' => '2017-08-28 09:55:58',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Tosca',
                'created_at' => '2017-08-28 09:56:03',
                'updated_at' => '2017-08-28 09:56:03',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Elisir D\'Amore',
                'created_at' => '2017-08-28 09:56:13',
                'updated_at' => '2017-08-28 09:56:13',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Manon - Massenet',
                'created_at' => '2017-08-28 09:56:25',
                'updated_at' => '2017-08-28 09:56:25',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Aida',
                'created_at' => '2017-08-28 09:56:31',
                'updated_at' => '2017-08-28 09:56:31',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Machbet',
                'created_at' => '2017-08-28 09:56:37',
                'updated_at' => '2017-08-28 09:56:37',
            ),
        ));
        
        
    }
}