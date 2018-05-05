<?php

use Illuminate\Database\Seeder;

class NacionalidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nacionalidades')->insert([
            'nome' => 'Brasil',
            'sigla' => 'BRA'
        ]);
        
        DB::table('nacionalidades')->insert([
            'nome' => 'Estados Unidos',
            'sigla' => 'EUA'
        ]);
        
        DB::table('nacionalidades')->insert([
            'nome' => 'Itália',
            'sigla' => 'ITA'
        ]);

        DB::table('nacionalidades')->insert([
            'nome' => 'Espanha',
            'sigla' => 'ESP'
        ]);

        DB::table('nacionalidades')->insert([
            'nome' => 'França',
            'sigla' => 'FRA'
        ]);

        DB::table('nacionalidades')->insert([
            'nome' => 'Canadá',
            'sigla' => 'CAN'
        ]);

        DB::table('nacionalidades')->insert([
            'nome' => 'Alemanha',
            'sigla' => 'ALE'
        ]);

        DB::table('nacionalidades')->insert([
            'nome' => 'Inglaterra',
            'sigla' => 'ING'
        ]);

        DB::table('nacionalidades')->insert([
            'nome' => 'Rússia',
            'sigla' => 'RUS'
        ]);

        DB::table('nacionalidades')->insert([
            'nome' => 'China',
            'sigla' => 'CHI'
        ]);

        DB::table('nacionalidades')->insert([
            'nome' => 'Japão',
            'sigla' => 'JAP'
        ]);


    }
}
