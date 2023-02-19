<?php

namespace Teguhpermadi\SiakadPackage\Database\Factories;
// namespace Database\Factories;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Student>
 */
final class StudentFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Student::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'fullname' => fake()->name(),
            'nickname' => fake()->name(),
            'gender' => fake()->randomElement(['male', 'female']),
            'birth_place' => \Indonesia::allCities()->random()->id,
            'birth_date' => fake()->date(),
            'religion' => fake()->randomElement(['islam', 'kristen', 'katholik', 'hindu', 'budha', 'konghucu']),
            'photo' => fake()->imageUrl(),
            'nisn' => fake()->randomNumber(6, false),
            'nis' => fake()->randomNumber(4, false),
            'address' => fake()->address,
            'village_id' => \Indonesia::allVillages()->random()->id,
            'postal_code' => fake()->postcode,
            'enrollment_year' => fake()->date(),
            'father_name' => fake()->word,
            'father_status' => fake()->randomElement(['alive', 'deceased']),
            'father_education' => fake()->word,
            'father_occupation' => fake()->word,
            'father_income' => fake()->randomNumber,
            'father_phone' => fake()->word,
            'mother_name' => fake()->word,
            'mother_status' => fake()->randomElement(['alive', 'deceased']),
            'mother_education' => fake()->word,
            'mother_occupation' => fake()->word,
            'mother_income' => fake()->randomNumber,
            'mother_phone' => fake()->word,
        ];
    }
}
