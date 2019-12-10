<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huespedes extends Model
{
   public function Personas(){
   	return $this->BelongsTo(Personas::class);
   }

   public function Habitaciones(){
   	return $this->HasMany(Habitaciones::class);
   }
}
