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
       
       $this->call(PersonasTableSeeder::class);
       $this->call(HabitacionesTableSeeder::class);
       $this->call(HuespedesTableSeeder::class);
    }
}
