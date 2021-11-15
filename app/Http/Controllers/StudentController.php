<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request): array
    {
        return [
            'students' => Student::with('classrooms')->paginate(10),
            'classroom' => Classroom::paginate(10),
        ];
    }
}
