<?php

namespace Database\Seeders;

use App\Models\Departament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departaments = [
            ['name' =>  "san salvador" , "postal_code"=> 1211],
            ['name' =>  "la union" , "postal_code"=> 4646],
       ];
        Departament::insert($departaments);
    }
}
