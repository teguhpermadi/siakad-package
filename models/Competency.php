<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competency extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_subject_id',
        'code',
        'code_skill',
        'description',
        'description_skill',
        'passing_grade',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $cast = [
        'code' => 'string',
        'code_skill' => 'string',
    ];
    
    public function teacherSubject()
    {
        return $this->belongsTo(TeacherSubject::class,'teacher_subject_id');
    }

    public function studentCompetency()
    {
        return $this->hasMany(StudentCompetency::class);
    }
    
    public function scopeActive(Builder $query): void
    {
        $query->whereHas('teacherSubject');
    }
}
