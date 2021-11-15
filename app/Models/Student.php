<?php

namespace App\Models;

use Database\Factories\StudentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable =['name','classrooms_id'];

    public function classrooms() {
        return $this->belongsTo(Classroom::class);
    }


    protected static function newFactory()
    {
        return StudentFactory::new();
    }
}
