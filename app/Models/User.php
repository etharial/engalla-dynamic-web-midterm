<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Model
{

    use HasFactory;
    public function student(): HasOne
    {
        return $this->hasOne(Student::class);
    }

    public function teacher(): HasOne
    {
        return $this->hasOne(Teacher::class);
    }

    public function roles(): BelongsToMany {
        return $this->belongsToMany(Role::class, 'user_role');
    }

    protected $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'password',
        'registration_date',
    ];
}