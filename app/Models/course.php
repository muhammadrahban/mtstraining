<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'featured',
        'assessment',
        'short_desc',
        'units',
        'duration',
        'earning',
        'ageLimit',
        'price',
    ];

    /**
     * Get all of the availability for the course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function availability()
    {
        return $this->hasMany(availability::class, 'course_id', 'id');
    }

    /**
     * Get the desc associated with the course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function desc()
    {
        return $this->hasOne(content::class, 'course_id', 'id');
    }
}
