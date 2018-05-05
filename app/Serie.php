<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    
    protected $fillable = [
        'nome', 
        'url_capa',
        'ano_lancamento',
        'descricao',
        'ativo'
    ];

    public function temporadas(){
        return $this->hasMany(Temporada::class)->orderBy('numero');
    }

    public function episodios()
    {
        return $this->hasManyThrough(Episodio::class, Temporada::class);
    }


}
