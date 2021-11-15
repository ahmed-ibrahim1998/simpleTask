<?php

namespace App\Models;

use Database\Factories\ClassroomFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $table = 'classrooms';

    protected $fillable =['name'];

    public function students() {
        return $this->hasMany(Student::class);
    }



    protected static function newFactory()
    {
        return ClassroomFactory::new();
    }
}
