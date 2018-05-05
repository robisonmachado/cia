<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'name' => 'cliente'
        ]);

        DB::table('user_types')->insert([
            'name' => 'revendedor'
        ]);

        DB::table('user_types')->insert([
            'name' => 'revendedor master'
        ]);

        DB::table('user_types')->insert([
            'name' => 'administrador'
        ]);

        DB::table('user_types')->insert([
            'name' => 'desenvolvedor'
        ]);

        
    }
}
