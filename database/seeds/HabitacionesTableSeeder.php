<?php

use Illuminate\Database\Seeder;

class HabitacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('habitaciones')->insert(
        	[
	        	'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s'),
	        	'precio'=>5000,
            	'tipo_habitacion'=>'suite',
            	'nro_piso'=>'5to',
            	'huesped_id'=>'1',
	        ]
	        );
        DB::table('habitaciones')->insert(
        	[
	        	'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s'),
	        	'precio'=>300,
            	'tipo_habitacion'=>'simple',
            	'nro_piso'=>'3er',
            	'huesped_id'=>'2',
	        ]
	        );
    }
}
