<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::group(['middleware' => ['auth', 'auth.unique.user']],function () {

    Route::get('databaseinfo', function () {
        if(Auth::user()->isAdmin()){
            $generos = App\Genero::orderBy('id')->get();
            $filmes = App\Filme::orderBy('nome')->get();
            return view('admin.databaseinfo',[
                    'generos' => $generos,
                    'filmes' => $filmes
            ]);
        }
                
    });

    
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('filmes/gerarListaM3U', 'FilmeController@gerarListaM3U'); 
    Route::get('temporadas/create/{serie}', 'TemporadaController@create');
    Route::get('episodios/create/{temporada}', 'EpisodioController@create');

    Route::get('usuarios/{user}/filmes', 'UserController@filmes'); 
    Route::get('filmes/{filme}/play', 'FilmeController@play'); 

    Route::resource('filmes', 'FilmeController');
    Route::resource('generos', 'GeneroController');
    Route::resource('series', 'SerieController');
    Route::resource('temporadas', 'TemporadaController');
    Route::resource('episodios', 'EpisodioController');
    Route::resource('usuarios', 'UserController');

});


Auth::routes();
