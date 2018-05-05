<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $fillable = [
        'numero',
        'nome', 
        'serie_id',
        'url_capa',
        'descricao',
        'ativo'
    ];

    public function serie(){
        return $this->belongsTo(Serie::class);
    }

    public function episodios(){
        return $this->hasMany(Episodio::class)->orderBy('numero');
    }

}
