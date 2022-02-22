<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use function Symfony\Component\Finder\name;

class StudentController extends Controller
{
    protected $student;
    protected $city;

    public function index()
    {
        $this->student = new Student();
        $this->student->newStudent();
        return 'success';

//        $this->students=Student::getAllStudent();

//        return view('all',
//            ['students' => $this->students]
//        );
    }
}
