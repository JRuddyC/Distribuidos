<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitaciones extends Model
{
    public function Huespedes(){
    	return $this->BelongsTo(Huespedes::class);
    }
}
