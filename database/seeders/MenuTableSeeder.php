<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'id'               => 1,
            'nombre'           => 'Menu',
            'slug'             => '',
            'status'           => 1,
            'product_meta_title'      => 'Inicio',
            'product_meta_description' => 'Descripción de prueba para la página welcome',
            'product_meta_keywords'    => 'descripción, prueba, gepixys, welcome',
        ]);
    }
}
