<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB :: table('articles') -> insert( [
            [
                'title' => 'Thailand',
                'detail' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
            ],
            [
                'title' => 'Japan',
                'created_at' => now(),
                'updayed_at' => now(),
                'deleted_at' => now(),
            ],
            [
                'title' => 'China',
                'created_at' => now(),
                'updayed_at' => now(),
                'deleted_at' => now(),
            ],
        ]);
    }
}
