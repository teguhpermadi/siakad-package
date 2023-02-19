<?php

namespace Teguhpermadi\SiakadPackage\Database\Factories;
// namespace Database\Factories;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Teacher>
 */
final class TeacherFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Teacher::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            // 'user_id' => fake()->randomNumber(),
            'fullname' => fake()->name(),
            'nickname' => fake()->name(),
            'gender' => fake()->randomElement(['male', 'female']),
            'birth_place' => \Indonesia::allCities()->random()->id,
            'birth_date' => fake()->date(),
            'religion' => fake()->randomElement(['islam', 'kristen', 'katholik', 'hindu', 'budha', 'konghucu']),
            'photo' => fake()->imageUrl(),
            'address' => fake()->address,
            'village_id' => \Indonesia::allVillages()->random()->id,
            'postal_code' => fake()->postcode,
            'tmt_teaching' => fake()->dateTime(),
            'employee_number' => fake()->word,
            'employee_status' => fake()->randomElement(['tetap', 'tidak tetap', 'paruh waktu']),
            'phone_number' => fake()->phoneNumber,
            'signature_image' => fake()->word,
        ];
    }
}
