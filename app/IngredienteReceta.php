<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredienteReceta extends Model
{
    protected $table = 'ingrediente_recetas';
    protected $fillable = ['cantidad'];

    public function ingrediente(){
        return $this->belongsTo(Ingrediente::class);
    }

    public function receta(){
        return $this->belongsTo(Receta::class);
    }

    public function cantidadAlter(){
        return $this->cantidad / $this->ingrediente()->get()->first()->unidadAlter;
    }
}
