<?php

namespace Database\Seeders;

use App\Models\PlanInicial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanInicialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlanInicial::factory(4)->create();
    }
}
