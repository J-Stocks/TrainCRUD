<?php

namespace Database\Factories;

use App\Models\Train;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainFactory extends Factory
{
    protected $model = Train::class;

    public function definition()
    {
        $productionStart = $this->faker->dateTimeBetween('-120 years', 'now');
        $productionEnd = $this->faker->dateTimeBetween(
            $productionStart,
            (clone $productionStart)->modify('+20 years')
        );
        if ($productionEnd > new DateTime()) {
            $productionEnd = null;
        }
        return [
            'make' => $this->faker->company,
            'model' => ucwords($this->faker->word),
            'production_start' => $productionStart,
            'production_end' => $productionEnd,
            'img_url' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph
        ];
    }
}
