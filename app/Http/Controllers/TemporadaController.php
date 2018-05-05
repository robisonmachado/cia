<?php

namespace App\Http\Controllers;

use App\Temporada;
use App\Serie;
use Illuminate\Http\Request;

class TemporadaController extends Controller
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
    public function create(Serie $serie)
    {
        return view('series.temporada_create',[
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
        $temporada = new Temporada;
        $temporada = $temporada->create($request->all());
       
        return redirect('series/'.$request->serie_id.'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Temporada  $temporada
     * @return \Illuminate\Http\Response
     */
    public function show(Temporada $temporada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Temporada  $temporada
     * @return \Illuminate\Http\Response
     */
    public function edit(Temporada $temporada)
    {
        //dd($temporada);
        $serie = $temporada->serie;
        return view('series.temporada_edit',[
            'temporada' => $temporada,
            'serie' => $serie
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Temporada  $temporada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temporada $temporada)
    {
        //dd('update temporada');
        $temporada->update($request->all());
        return redirect('series/'.$temporada->serie_id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Temporada  $temporada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temporada $temporada)
    {
        //dd('excluir temporada');
        $serie_id = $temporada->serie_id;
        $temporada->delete();
        return redirect('series/'.$serie_id.'/edit');
    }
}
