<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function attendanceList()
    {
        $teacher = auth()->user(); // Logged-in teacher
        $students = $teacher->students; // Fetch all students assigned to this teacher
        return view('teachers.attendance', compact('students'));
    }
    
    public function approveAttendance()
    {
        // Approve Attendance logic
    }    

}
