<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EducationSeeder::class,
            IncomeSeeder::class,
            OccupationSeeder::class,
            ReligionSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class,
            SchoolSeeder::class,
            AcademicYearSeeder::class,
            SubjectSeeder::class,
            TeacherSubjectSeeder::class,
            CompetencySeeder::class,
            GradeSeeder::class,
            ClassesSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
