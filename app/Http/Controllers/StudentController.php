<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function index(Request $request){
        $students = Student::all();
        return view("students", ['students' => $students]);
    }

    public function form(){
        return view('add_student');
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request){
        $request->validate([
            'school_name' => 'required|string',
            'student_name' => 'required|string',
            'class' => 'required|integer',
            'roll_no' => 'required|integer',
        ]);

        $student = new Student;
        $student->school_name = $request->school_name;
        $student->class = $request->class;
        $student->student_name = $request->student_name;
        $student->roll_no = $request->roll_no;
        $student->save();
        return redirect('add_student')->with('status', 'Student added successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('status', 'Student deleted!');;
    }


    public function edit(Student $student)
    {
        return view('edit_student', ['student' => $student]);
    }

    public function update(Request $request, Student $student)
    {
        $student->school_name = $request->school_name;
        $student->class = $request->class;
        $student->student_name = $request->student_name;
        $student->roll_no = $request->roll_no;
        $student->save();

        return redirect()->route('students.index')->with('status', 'Student updated successfully!');
    }


}
