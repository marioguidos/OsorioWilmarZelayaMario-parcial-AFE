<?php

namespace Database\Seeders;

use App\Models\Investigation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvestigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $investigations = [
            ['title' =>  'Gravitional Theory', "description" => "Gravitional Theory in our world to discover the world", "status_id" => 1],
            ['title' =>  'Quatum Theory', "description" => "Quatum Theory in our world to discover the world", "status_id" => 2],
            ['title' =>  'Science bits', "description" => "SCIENCE BITS LLEVA LA INVESTIGACIÓN SOBRE CÓMO APRENDEN LOS ESTUDIANTES A TUS CLASES DE CIENCIAS.", "status_id" => 3],
            ['title' =>  'Characteristics of language', "description" => "language, a system of conventional spoken, manual (signed), or written symbols by means of which human beings, as members of a social group and participants in its culture, express themselves. The functions of language include communication", "status_id" => 4]
        ];
        Investigation::insert($investigations);
    }
}
