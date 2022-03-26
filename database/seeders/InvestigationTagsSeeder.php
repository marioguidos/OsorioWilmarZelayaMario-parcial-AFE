<?php

namespace Database\Seeders;

use App\Models\InvestigationTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvestigationTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $investigation_tags = [
            [
                'investigation_id' => 1,
                'tag_id' => 1
            ], [
                'investigation_id' => 2,
                'tag_id' => 2
            ], [
                'investigation_id' => 3,
                'tag_id' => 3
            ], [
                'investigation_id' => 4,
                'tag_id' => 4
            ]
        ];
        InvestigationTag::insert($investigation_tags);
    }
}
