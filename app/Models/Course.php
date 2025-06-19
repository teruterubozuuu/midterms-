<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{

    use HasFactory;
        public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class,'student_id');
    }

            public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }


    public function schedule(): HasMany{
        return $this->hasMany(Schedule::class);
    }
}
