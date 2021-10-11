<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'short_name' => $this->faker->lastName(),
            'full_name' => $this->faker->company(),
            'street' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'post_code' => $this->faker->postCode(),
            'country' => $this->faker->country(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone1' => $this->faker->e164PhoneNumber(),
            'phone2' => $this->faker->e164PhoneNumber(),
            'nip' => $this->faker->taxpayerIdentificationNumber(),
            'regon' => $this->faker->regon(),
            'krs' => $this->faker->regon(),
            'description' => $this->faker->text($maxNbChars = 200), 
            'created_by_user' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}
