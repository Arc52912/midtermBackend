<?php

namespace Database\Factories;

use App\Models\Asset;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asset::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'laptop_name' => $this->faker->randomElement(['Del','Acer','Lenovo','HP','Toshiba','Huawei','Apple']),
            'description' => $this->faker->word(),
            'os' => $this->faker->randomElement(['Windows','Linux','Mac','Windows me','Windows XP']),
            'price' => $this->faker->numberBetween(9999,89999),
            'acquired_on' => $this->faker->date(),
            'status' => $this->faker->randomElement(['Good','Very Good', 'Excellent', 'Bad', 'Very Bad']),
        ];
    }
}
