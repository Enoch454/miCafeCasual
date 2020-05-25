<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'ordens';
    protected $fillable = ['monto'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function ordenRecetas(){
        return $this->hasMany(OrdenReceta::class);
    }

    

}
