<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // buat student tanpa user
        for ($i=0; $i < 5; $i++) { 
            Student::factory()->create();
        }

        // buat student dengan user
        $student_with_user = student::factory()->create();
        $user = User::factory()->state(['guard' => 'student'])->for($student_with_user, 'guardable')->create();
        student::find($student_with_user->id)->update(['user_id'=> $user->id]); 
    }
}
