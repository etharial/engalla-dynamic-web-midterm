<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Schedule extends Model
{
    use HasFactory;
    public function courses() : BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'class_student');
    }

    protected $fillable = [
    'day_of_week',
    'time_slot',
    'room',
    'term',
    'course_id',
];
}
