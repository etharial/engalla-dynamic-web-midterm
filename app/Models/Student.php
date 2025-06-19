<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function courses(): BelongsToMany {
        return $this->belongsToMany(Course::class, 'class_student');
    }

    protected $fillable = [
    'first_name',
    'last_name',
    'program',
    'enrollment_year',
    'birthday',
];
}
