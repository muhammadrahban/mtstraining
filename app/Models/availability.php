<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class availability extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'user_id',
        'price',
        'location',
        'starting',
        'ending',
        'seats',
    ];

    /**
     * Get the course associated with the availability
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function course()
    {
        return $this->belongsTo(course::class, 'course_id', 'id');
    }
}
