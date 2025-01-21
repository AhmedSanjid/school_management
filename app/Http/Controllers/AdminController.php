<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function createStudent()
{
    // Logic to create a student
}

public function createTeacher()
{
    // Logic to create a teacher
}

public function viewUsers()
{
    $students = Student::all();
    $teachers = Teacher::all();
    return view('admin.users', compact('students', 'teachers'));
}

}
