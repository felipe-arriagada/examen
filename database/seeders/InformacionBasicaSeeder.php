<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InformacionBasica;

class InformacionBasicaSeeder extends Seeder
{
    public function run()
{
    InformacionBasica::factory()->count(10)->create();
}

}
