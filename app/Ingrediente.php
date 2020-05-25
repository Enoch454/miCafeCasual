<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingredientes';
    protected $fillable = ['nombre','cantidad','unidad'];

    public function ingredienteRecetas(){
        return $this->hasMany(IngredienteReceta::class);
    }

}
