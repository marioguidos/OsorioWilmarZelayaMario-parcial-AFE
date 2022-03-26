<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['name' =>  'Math'],
            ['name' =>  'Electronic'],
            ['name' =>  'Science'],
            ['name' =>  'Language'],
            ['name' =>  'Physics'],
        ];
        Tag::insert($tags);
    }
}
