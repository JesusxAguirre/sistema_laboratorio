<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pacientes;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pacientes::factory(100)->create();   
    }
}
