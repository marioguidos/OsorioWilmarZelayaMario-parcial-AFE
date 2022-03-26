<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Statu;

class StatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['name' =>  'Active'],
            ['name' =>  'Desactive'],
            ['name' =>  'Empty'],
            ['name' =>  'Full'],
        ];
        Statu::insert($status);
    }
}
