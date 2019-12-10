<?php

use Illuminate\Database\Seeder;

class HuespedesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huespedes')->insert(
        	[
	        	'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s'),
	        	'tiempo_hospedaje'=>'3dias',
            	'procedencia'=>'Potosi',
            	'motivo'=>'vacaciones',
            	'persona_id'=>'1',
	        ]
	        );
        DB::table('huespedes')->insert(
        	[
	        	'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s'),
	        	'tiempo_hospedaje'=>'1semana',
            	'procedencia'=>'Sucre',
            	'motivo'=>'negocios',
            	'persona_id'=>'2',
	        ]
	        );
    }
}
