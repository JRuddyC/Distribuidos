<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $table = 'Personas';
    protected $fillable = ['nombres','apellidos','telefono','ci'];

    public function Huespedes(){
    	return $this->HasOne(Huespedes::class);
    }
}
