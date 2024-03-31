<?php

namespace App\Models;

use App\Models\Scopes\AcademicYearScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'academic_year_id',
        'grade_id',
        'teacher_id',
        'name',
        'description',
        'phase',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope(new AcademicYearScope);
    }

    public function academic()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id');
    }

    public function teacher()
    {
         return $this->belongsTo(Teacher::class);
    }
    
    public function grade()
    {
         return $this->belongsTo(Grade::class);
    }

    public function projectTarget()
    {
        return $this->hasMany(ProjectTarget::class);
    }

    public function note()
    {
        return $this->hasMany(ProjectNote::class);
    }
}
