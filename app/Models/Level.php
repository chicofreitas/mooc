<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    /**
     *  Get the courses for the level.
     */
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
