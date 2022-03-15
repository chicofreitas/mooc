<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    /**
     *  Get the courses for the subject.
     */
    public function courses()
    {
        return $this->hasMany(Cours::class);
    }
}
