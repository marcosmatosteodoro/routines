<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        Category::create(['name' => 'Diário']);
        Category::create(['name' => 'Dias úteis']);
        Category::create(['name' => 'Fim de semana']);
        Category::create(['name' => 'Semanal']);
        Category::create(['name' => 'Mensal']);
        Category::create(['name' => 'Personalizado']);
    }
}
