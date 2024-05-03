<?php

namespace Database\Seeders;

use App\Models\Apartament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Apartament::factory()->count(5)->create();
    }
}
