<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
class Clients extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        Client::factory()->count(5)->create();
    }
}