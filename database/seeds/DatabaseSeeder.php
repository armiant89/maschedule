<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TimezonesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(ProductionsTableSeeder::class);
        $this->call(PeriodsTableSeeder::class);
        $this->call(PerformancesTableSeeder::class);
    }
}
