<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function getCreateStudent()
    {
        return view('createstudent');
    }

    public function createStudent(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'NIM' => $request->NIM,
            'birth' => $request->birth,
            'age' => $request->age,
            'class' => $request->class,
        ]);
        return redirect(route('getStudents'));
    }

    public function getStudents()
    {
        $students = Student::all();
        return view('viewstudent', ['studentz' => $students]);
    }

    public function getStudentById($id)
    {
        $student = Student::find($id);
        return view('updatestudent', ['student' => $student]);
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update([
            'name' => $request->name,
            'NIM' => $request->NIM,
            'birth' => $request->birth,
            'age' => $request->age,
            'class' => $request->class,
        ]);
        return redirect(route('getStudents'));
    }

    public function deleteStudent($id)
    {
        Student::destroy($id);
        return redirect(route('getStudents'));
    }
}
