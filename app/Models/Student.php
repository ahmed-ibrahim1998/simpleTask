<?php

namespace App\Models;

use Database\Factories\StudentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable =['fname','lname','classrooms_id'] ,  $appends = array('full_name');

    public function classrooms() {
        return $this->belongsTo(Classroom::class);
    }

    public function getFullNameAttribute(){
        return $this->fname . ' '.$this->lname;
    }

    protected static function newFactory()
    {
        return StudentFactory::new();
    }
}
