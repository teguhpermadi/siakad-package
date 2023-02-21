<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // buat 1 teacher tanpa user
        Teacher::factory()->create();

        // buat 1 teacher dengan user
        $teacher_with_user = Teacher::factory()->create();
        $user = User::factory()->state(['guard' => 'teacher'])->for($teacher_with_user, 'guardable')->create();
        Teacher::find($teacher_with_user->id)->update(['user_id'=> $user->id]);        
    }
}
