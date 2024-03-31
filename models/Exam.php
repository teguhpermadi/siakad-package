<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'teacher_subject_id',
        'student_id',
        // 'category',
        'score_middle',
        'score_last',
    ]; 

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
