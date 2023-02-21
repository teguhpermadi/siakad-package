<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    use HasFactory;

    protected $table = 'academic_years';

    protected $fillable = [
        'headmaster',
        'year',
        'semester',
        'receiving_date',
    ]; 

    public function headmaster()
    {
        return $this->belongsTo(Teacher::class, 'headmaster');
    }
}
