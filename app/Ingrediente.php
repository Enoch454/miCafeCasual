<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingredientes';
    protected $fillable = ['nombre','cantidad','unidad', 'unidadAlter', 'nombreUnidadAlter'];

    public function ingredienteRecetas(){
        return $this->hasMany(IngredienteReceta::class);
    }

    public function cantidadAlter(){
        return $this->cantidad / $this->unidadAlter;
    }

    

}
