<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'Type'
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
}
