<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table = 'recetas';
    protected $fillable = ['categoria', 'descripcion', 'nombre'];

    public function ordenRecetas(){
        return $this->hasMany(OrdenReceta::class);
    }

    public function ingredienteRecetas(){
        return $this->hasMany(IngredienteReceta::class);
    }
}
