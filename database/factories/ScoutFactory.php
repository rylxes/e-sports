<?php

namespace Database\Factories;

use App\Models\Scout;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Scout::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'profile_url' => $this->faker->word,
        'first_name' => $this->faker->word,
        'middle_name' => $this->faker->word,
        'last_name' => $this->faker->word,
        'dob' => $this->faker->word,
        'gender' => $this->faker->word,
        'scouting_age' => $this->faker->word,
        'scouting_gender' => $this->faker->word,
        'sports' => $this->faker->text,
        'specialization' => $this->faker->text,
        'language' => $this->faker->text,
        'nationality' => $this->faker->text,
        'city_id' => $this->faker->word,
        'user_id' => $this->faker->randomDigitNotNull,
        'email' => $this->faker->word,
        'employment_type' => $this->faker->word,
        'scouting_level' => $this->faker->word,
        'qualifications' => $this->faker->word,
        'team_club' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
