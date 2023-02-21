<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competency extends Model
{
    use HasFactory;

    protected $table = 'competencies';

    
    protected $fillable = [
        'teacher_subject_id',
        'description',
    ];
    
    // protected $hidden = ['description'];
    
    public function teacher_subject()
    {
        return $this->belongsTo(TeacherSubject::class)->with('academic_year','teacher', 'subject');
    }
}
