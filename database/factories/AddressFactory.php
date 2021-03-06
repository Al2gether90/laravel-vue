<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address'  => $this->faker->word,
            'zip'      => $this->faker->postcode,
            'city'     => $this->faker->city,
            'state_id' => function () {
                $state = State::inRandomOrder()->first();

                if ($state) {
                    return $state;
                }

                return State::factory()->create();
            },
        ];
    }
}
