<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'property_id' => Property::factory(),
            'image'       => 'storage/properties/img_' . random_int(1, 8) . '.jpg',
        ];
    }
}
