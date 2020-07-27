<?php

namespace App\Http\Controllers;

use App\Student;
class StudentController extends Controller
{
    //学生列表页
    public function index()
    {
        $students = Student::paginate(2);

        return view('student.index',['students' =>$students,]);
    }

    public function create()
    {
        return view('student.create');
    }
}