<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function profile()
    {
        $student = auth()->user(); // Logged-in student
        return view('students.profile', compact('student'));
    }
    
    public function requestAttendance()
    {
        // Request Attendance logic
    }    

}
