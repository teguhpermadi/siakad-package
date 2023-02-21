<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $casts = [
		'user_id' => 'int',
		'village_id' => 'int',
		'father_income' => 'int',
		'mother_income' => 'int'
	];

	protected $hidden = [
		'birth_place',
		'birth_date',
		'religion',
		'photo',
		'address',
		'village_id',
		'postal_code',
		'enrollment_year',
		'father_name',
		'father_status',
		'father_education',
		'father_occupation',
		'father_income',
		'father_phone',
		'mother_name',
		'mother_status',
		'mother_education',
		'mother_occupation',
		'mother_income',
		'mother_phone'
	];

	protected $fillable = [
		'user_id',
		'full_name',
		'nickname',
		'gender',
		'birth_place',
		'birth_date',
		'religion',
		'photo',
		'nisn',
		'nis',
		'address',
		'village_id',
		'postal_code',
		'enrollment_year',
		'father_name',
		'father_status',
		'father_education',
		'father_occupation',
		'father_income',
		'father_phone',
		'mother_name',
		'mother_status',
		'mother_education',
		'mother_occupation',
		'mother_income',
		'mother_phone'
	];

	public function user()
    {
        return $this->morphOne(User::class, 'guardable');
    }
}
