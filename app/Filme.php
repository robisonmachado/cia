<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Nacionalidade;

class Filme extends Model
{
    protected $fillable = [
        'nome', 
        'duracao',
        'diretor',
        'nacionalidade_id',
        'ano_lancamento', 
        'url_arquivo',
        'url_arquivo_encurtada',
        'url_capa',
        'sinopse',
        'ativo'
    ];

    public function nacionalidade(){
        return $this->belongsTo(Nacionalidade::class);
    }

    public function generos(){
        return $this->belongsToMany(Genero::class);
    }

    public function temUrlCapa():bool{
        return empty($this->url_capa) ? false : true;
    }


    public function filmesExcetoGenero($genero_id){
        return $this->whereHas('generos', function($query) use ($genero_id){
            $query->where('genero_id', '!=', $genero_id);
        })->orderBy('nome')->get();
    }

    public static function getRamdomFilmes(int $quantidade){
        return self::orderByRaw('RAND()')->distinct('id')->take($quantidade)->get();
    }

}
