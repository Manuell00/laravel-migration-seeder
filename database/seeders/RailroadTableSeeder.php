<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Uso il model
use App\Models\Railroad;

class RailroadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Genero 100 records nella mia tabella
        Railroad::factory()->count(100)->create();
    }
}
