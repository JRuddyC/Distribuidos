<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert(
        	[
	        	
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s'),
	            'nombres'=>'ruddy',
            	'apellidos'=>'choque',
            	'telefono'=>'72558962',
            	'ci'=>'8533732',
	        ]
	        );
        DB::table('personas')->insert(
        	[
	        	
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s'),
	            'nombres'=>'karen',
            	'apellidos'=>'choque',
            	'telefono'=>'72558852',
            	'ci'=>'8215464',
	        ]
	        );
    }
}
