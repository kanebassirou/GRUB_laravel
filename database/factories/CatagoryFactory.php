<?php

namespace Database\Factories;

use App\Models\Catagory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catagory>
 */
class CatagoryFactory extends Factory
{
    protected $model = Catagory::class; 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
        ];
    }
}
