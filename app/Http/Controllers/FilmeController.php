<?php

namespace App\Http\Controllers;

use App\Filme;
use App\Genero;
use App\Nacionalidade;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('Filme index');
        $filmes = Filme::orderBy('nome')->get();
        $generos = Genero::orderBy('nome')->get();

        
        return view('filmes.filme_index', [
            'filmes' => $filmes,
            'generos' => $generos 
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $generos = Genero::orderBy('nome')->get();
        $nacionalidades = Nacionalidade::orderBy('nome')->get();
        return view('filmes.filme_create', [
            'generos' => $generos,
            'nacionalidades' => $nacionalidades
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;

        $filme = new Filme;
        $filme = $filme->create($request->all());
        $filme->generos()->sync($request->generos);
       
        return redirect('filmes');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function show(Filme $filme)
    {
        dd('Filme show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function edit(Filme $filme)
    {
        //dd($filme->generos->all());
        //return;

        $generos = Genero::orderBy('nome')->limit(1000)->get();
        $nacionalidades = Nacionalidade::orderBy('nome')->get();
        return view('filmes.filme_edit', [
            'filme' => $filme,
            'generos' => $generos,
            'nacionalidades' => $nacionalidades
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filme $filme)
    {
        //dd('Filme update');
        $filme_editado = $filme->nome;
        
        $filme->update($request->all());
        $filme->generos()->sync($request->generos);

        return redirect('filmes/'.$filme->id.'/edit')->with('editado', $filme_editado);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filme $filme)
    {
        $filme->delete();
        return redirect('filmes');
        
    }


    public function gerarListaM3U(){
       
//#EXTINF:-1 tvg-id="" tvg-name="300 - A Ascensão do Império" tvg-logo="http://painel.iptvmove.com:25461/images/1253863.jpg" group-title="FILME: ACAO/AVENTURA",300 - A Ascensão do Império
//http://painel.iptvmove.com:25461/movie/jorgepmi001/jorgepmi001/5252.mp4


//http://painel.iptvmove.com:25461/movie/jorgepmi001/jorgepmi001/5372.mkv

        return response()->streamDownload( function () {

            $GENERO_ID = 13;
            $filmesSemAdultos = (new Filme)->filmesExcetoGenero($GENERO_ID);
            $data = date('d/m/Y H:i:s');

            $generosComFilmes = Genero::has('filmes')->orderBy('nome')->get();

            echo view('lista_filmes',[
                'data' => $data,
                'filmesSemAdultos' => $filmesSemAdultos,
                'generosComFilmes' => $generosComFilmes
            ])->render();
            
            

        }, 'iptvmais.m3u8');
    }

    public function play(Filme $filme){
        return view('filmes.play_filme',[
            "filme" => $filme
        ]);
    }

}
