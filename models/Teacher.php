<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';

	protected $casts = [
		'user_id' => 'int',
		'village_id' => 'int'
	];

	protected $dates = [
		'tmt_teaching'
	];

	protected $hidden = [
		'birth_place',
		'birth_date',
		'religion',
		'photo',
		'address',
		'village_id',
		'postal_code',
		'tmt_teaching',
		'employee_number',
		'employee_status',
		'phone_number',
		'signature_image'
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
		'address',
		'village_id',
		'postal_code',
		'tmt_teaching',
		'employee_number',
		'employee_status',
		'phone_number',
		'signature_image'
	];

    public function user()
    {
        return $this->morphOne(User::class, 'guardable');
    }

	public function headmaster()
	{
		return $this->hasMany(AcademicYear::class, 'headmaster');
	}

	public function subject()
	{
		return $this->hasMany(TeacherSubject::class);
	}

	// public function indonesia_village()
	// {
	// 	return $this->belongsTo(IndonesiaVillage::class, 'village_id');
	// }

	// public function tahun_ajarans()
	// {
	// 	return $this->hasMany(TahunAjaran::class, 'kepala_sekolah');
	// }

	// public function subjects()
	// {
	// 	return $this->belongsToMany(Subject::class, 'teacher_subject')
	// 				->withPivot('id', 'tahun_ajaran_id', 'score_min')
	// 				->withTimestamps();
	// }
}
