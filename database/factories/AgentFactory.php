<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'full_name'   => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'title'       => 'Real Estate Agent',
            'description' => $this->faker->words(20, asText: true),
            'photo'       => 'storage/agents/person_' . random_int(1, 6) . '-min.jpg',
            'twitter'     => $this->faker->url(),
            'facebook'    => $this->faker->url(),
            'linkedin'    => $this->faker->url(),
            'instagram'   => $this->faker->url(),
        ];
    }
}
