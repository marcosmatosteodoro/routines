<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Status::create(['name' => 'A fazer']);
        Status::create(['name' => 'Feito']);
        Status::create(['name' => 'Atrasado']);
    }
}
