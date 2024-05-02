<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apartament;
use Illuminate\Support\Facades\DB;
class Apartaments extends Seeder
{
/**
* Run the database seeds.
*/
public function run(): void
{
Apartament::factory()->count(5)->create();
}
}