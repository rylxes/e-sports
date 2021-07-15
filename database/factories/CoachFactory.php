<?php

namespace Database\Factories;

use App\Models\Coach;
use Illuminate\Database\Eloquent\Factories\Factory;

class CoachFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coach::class;

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
        'user_id' => $this->faker->randomDigitNotNull,
        'email' => $this->faker->word,
        'first_name' => $this->faker->word,
        'middle_name' => $this->faker->word,
        'last_name' => $this->faker->word,
        'dob' => $this->faker->word,
        'gender' => $this->faker->word,
        'coaching_age' => $this->faker->word,
        'coaching_gender' => $this->faker->word,
        'sports' => $this->faker->text,
        'specialization' => $this->faker->text,
        'language' => $this->faker->text,
        'nationality' => $this->faker->text,
        'city_id' => $this->faker->word,
        'employment_type' => $this->faker->word,
        'team_club' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
