<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    public function definition(): array
    {
        $agents = collect(Agent::all()->modelKeys());

        return [
            'agent_id'    => $agents->random(),
            'price'       => $this->faker->randomNumber(),
            'address'     => $this->faker->address(),
            'country'     => $this->faker->country(),
            'beds'        => $this->faker->numberBetween(1, 3),
            'baths'       => $this->faker->numberBetween(1, 3),
            'description' => $this->faker->text(),
            'is_popular'  => $this->faker->boolean(),
            'is_featured' => $this->faker->boolean(),
        ];
    }
}
