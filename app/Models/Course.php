<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;
    public function students() : BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'class_student');
    }

    public function schedules() : HasMany
    {
        return $this->hasMany(Schedule::class);
    }

    protected $fillable = [
    'subject',
    'course_code',
    'credits',
    'description',
];
}
