<?php

namespace Database\Factories;

use App\Models\Talent;
use Illuminate\Database\Eloquent\Factories\Factory;

class TalentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Talent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'profile_url' => $this->faker->word,
        'qualifications' => $this->faker->word,
        'scheme' => $this->faker->word,
        'user_id' => $this->faker->randomDigitNotNull,
        'email' => $this->faker->word,
        'first_name' => $this->faker->word,
        'middle_name' => $this->faker->word,
        'last_name' => $this->faker->word,
        'dob' => $this->faker->word,
        'age' => $this->faker->randomDigitNotNull,
        'gender' => $this->faker->word,
        'languages' => $this->faker->word,
        'city_id' => $this->faker->word,
        'genotype' => $this->faker->word,
        'blood_group' => $this->faker->word,
        'sports' => $this->faker->text,
        'positions' => $this->faker->text,
        'educational_background' => $this->faker->text,
        'nationality' => $this->faker->word,
        'height' => $this->faker->randomDigitNotNull,
        'weight' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
