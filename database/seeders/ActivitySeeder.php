<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Activity::create([
            'name' => 'Duolingo',
            'description' => 'Ralizar uma step por dia',
            'category_id' => 1
        ]);

        Activity::create([
            'name' => 'Youglish',
            'description' => 'Pesquisar por 2 frases por dia',
            'category_id' => 1
        ]);

        Activity::create([
            'name' => 'Lingoclip',
            'description' => 'Vencer 1 chalenge de linguagem por dia',
            'category_id' => 1
        ]);

        Activity::create([
            'name' => 'Typelit',
            'description' => 'Digitar uma página de livro por dia',
            'category_id' => 1
        ]);

        Activity::create([
            'name' => 'Newsinlevels',
            'description' => 'Ler uma notícia em todos os léveis em inglês por dia',
            'category_id' => 1
        ]);

        Activity::create([
            'name' => 'Video',
            'description' => 'Assistir um vídeo curto de conteudo em inglês',
            'category_id' => 1
        ]);

        Activity::create([
            'name' => 'Gramática',
            'description' => 'Assistir um vídeo de gramática em inglês sugerido pelo professor',
            'category_id' => 1
        ]);
    }
}
