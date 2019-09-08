<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function allOfStudents()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }

    public function deleteStudent($student_id)
    {
        if ($student_id && ctype_digit($student_id)) {
            $student = Student::find($student_id);
            if ($student && $student instanceof Student) {
                $student->delete();
                return redirect()->route('masterPage');
            }
        }
    }

    public function editStudent()
    {

    }
}
