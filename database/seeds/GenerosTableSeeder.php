<?php

use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->insert([ 'id' => 1, 'nome' => 'Romance' ]); 
DB::table('generos')->insert([ 'id' => 2, 'nome' => 'Ação' ]); 
DB::table('generos')->insert([ 'id' => 3, 'nome' => 'Aventura' ]); 
DB::table('generos')->insert([ 'id' => 4, 'nome' => 'Ficção Científica' ]); 
DB::table('generos')->insert([ 'id' => 5, 'nome' => 'Terror' ]); 
DB::table('generos')->insert([ 'id' => 6, 'nome' => 'Suspense' ]); 
DB::table('generos')->insert([ 'id' => 7, 'nome' => 'Faroeste' ]); 
DB::table('generos')->insert([ 'id' => 8, 'nome' => 'Policial' ]); 
DB::table('generos')->insert([ 'id' => 9, 'nome' => 'Comédia' ]); 
DB::table('generos')->insert([ 'id' => 10, 'nome' => 'Infantil' ]); 
DB::table('generos')->insert([ 'id' => 11, 'nome' => 'Animação' ]); 
DB::table('generos')->insert([ 'id' => 12, 'nome' => 'Desenho Animado' ]); 
DB::table('generos')->insert([ 'id' => 13, 'nome' => 'Adulto' ]); 
DB::table('generos')->insert([ 'id' => 14, 'nome' => 'Erótico' ]); 
DB::table('generos')->insert([ 'id' => 15, 'nome' => 'Espionagem' ]); 
DB::table('generos')->insert([ 'id' => 16, 'nome' => 'Fantasia' ]); 
DB::table('generos')->insert([ 'id' => 17, 'nome' => 'Guerra' ]); 
DB::table('generos')->insert([ 'id' => 18, 'nome' => 'Épico' ]); 
DB::table('generos')->insert([ 'id' => 19, 'nome' => 'Histórico' ]); 
DB::table('generos')->insert([ 'id' => 20, 'nome' => 'Drama' ]); 
DB::table('generos')->insert([ 'id' => 21, 'nome' => 'Biografia' ]); 
DB::table('generos')->insert([ 'id' => 22, 'nome' => 'Nacional' ]); 
DB::table('generos')->insert([ 'id' => 23, 'nome' => 'Religioso' ]); 
DB::table('generos')->insert([ 'id' => 24, 'nome' => 'Família' ]); 
DB::table('generos')->insert([ 'id' => 25, 'nome' => 'Infantil Kids' ]); 
DB::table('generos')->insert([ 'id' => 27, 'nome' => 'SÉRIE GRAVITY FALLS' ]); 
DB::table('generos')->insert([ 'id' => 28, 'nome' => 'Super-heróis' ]); 
DB::table('generos')->insert([ 'id' => 29, 'nome' => 'Lançamentos' ]); 
DB::table('generos')->insert([ 'id' => 30, 'nome' => 'SHOWS GOSPEL' ]); 
DB::table('generos')->insert([ 'id' => 31, 'nome' => 'SÉRIE CRIMINAL MINDS' ]); 
DB::table('generos')->insert([ 'id' => 32, 'nome' => 'Artes Marciais' ]); 
DB::table('generos')->insert([ 'id' => 33, 'nome' => 'SÉRIE MICKEY E DONALD' ]); 
DB::table('generos')->insert([ 'id' => 34, 'nome' => 'SÉRIE O PEQUENO REINO DE BEN E HOLLY' ]); 
DB::table('generos')->insert([ 'id' => 35, 'nome' => 'SÉRIE O MECANISMO' ]); 
DB::table('generos')->insert([ 'id' => 36, 'nome' => 'SÉRIE THE WALKING DEAD' ]); 
DB::table('generos')->insert([ 'id' => 37, 'nome' => 'SÉRIE TEEN WOLF' ]); 
DB::table('generos')->insert([ 'id' => 38, 'nome' => 'CLIPS E SHOWS' ]); 
    }
}
