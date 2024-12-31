<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InformacionBasicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{

    return [
        'logo_url' => $this->faker->url,
        'company_name' => $this->faker->company,
        'description' => $this->faker->sentence,
        'seo_keywords' => json_encode($this->faker->words(5)),
        'main_menu' => json_encode([
            ['name' => 'Inicio', 'url' => '/'],
            ['name' => 'Servicios', 'url' => '/servicios'],
            ['name' => 'Contacto', 'url' => '/contacto'],
        ]),
    ];
}
}