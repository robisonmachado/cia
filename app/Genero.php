<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $fillable = [
        'id',
        'nome', 
        'url_capa'
    ];
    
    public function filmes(){
        return $this->belongsToMany(Filme::class)->orderBy('nome');
    }
}
