<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName().' '.$this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone1' => $this->faker->e164PhoneNumber(),
            'phone2' => $this->faker->e164PhoneNumber(),
            'description' => $this->faker->text($maxNbChars = 200), 
            'company_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'created_by_user' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}
