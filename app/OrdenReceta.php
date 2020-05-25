<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenReceta extends Model
{
    protected $table = 'orden_recetas';
    protected $fillable = ['precio','cantidad','subtotal'];

    public function ingrediente(){
        return $this->belongsTo(Ingrediente::class);
    }

    public function receta(){
        return $this->belongsTo(Receta::class);
    }
    
}
