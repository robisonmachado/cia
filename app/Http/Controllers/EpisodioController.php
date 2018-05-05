<?php

namespace App\Http\Controllers;

use App\Episodio;
use App\Temporada;
use App\Serie;
use Illuminate\Http\Request;

class EpisodioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Temporada $temporada)
    {
        //dd($temporada);
        $serie = Serie::find($temporada->serie_id);
        //dd($serie);

        return view('series.episodio_create',[
            'temporada' => $temporada,
            'serie' => $serie
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
        //dd($request->all());
        $episodio = new Episodio;
        $episodio = $episodio->create($request->all());
       
        return redirect("temporadas/{$episodio->temporada_id}/edit");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Episodio  $episodio
     * @return \Illuminate\Http\Response
     */
    public function show(Episodio $episodio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Episodio  $episodio
     * @return \Illuminate\Http\Response
     */
    public function edit(Episodio $episodio)
    {
        //dd($episodio->temporada->serie);

        return view('series.episodio_edit',[
            'episodio' => $episodio
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Episodio  $episodio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Episodio $episodio)
    {
        //dd('update episódio');
        $episodio->update($request->all());
        return redirect("temporadas/{$episodio->temporada->id}/edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Episodio  $episodio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Episodio $episodio)
    {
        $temporada_id = $episodio->temporada->id;
        $episodio->delete();
        
        return redirect("temporadas/{$temporada_id}/edit");
    }
}
