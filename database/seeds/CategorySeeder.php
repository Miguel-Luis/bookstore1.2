<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Nuevo',
            'description' => 'Hermosos y de muy alta calidad. Huelen a tinta recien impresa.',
            'priority' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Viejo',
            'description' => 'De antaño, un poco deteriorados, pero fascinantes',
            'priority' => 2
        ]);

        DB::table('categories')->insert([
            'name' => 'Usado',
            'description' => 'Vienen de aquí y allá, con un gran recorrido. Han acompañado a muchos lectores voraces.',
            'priority' => 3
        ]);

        DB::table('categories')->insert([
            'name' => 'Inglés',
            'description' => 'Escritos en Ingles para lectores bilingües o angloparlantes',
            'priority' => 1
        ]);
    }
}
