<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ProjectTheme extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::addGlobalScope('level', function (Builder $builder) {
            $builder->where('level', 'sd');
        });
    }
}
