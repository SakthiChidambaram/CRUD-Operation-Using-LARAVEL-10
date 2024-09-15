<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(Request $Request){
        $users = $Request->only('name','phone','age');
        $data = Student::create($users);
        return 'Student has been created successfully! The is is'.$data->id;
    }
    public function list(){
        $students = Student::all();
        return view('Student_list',['students'=>$students]);
    }
    public function edit($id){
        $student = Student::find($id);
        return view('edit_student',['student'=>$student]);
    }
    public function update(Request $Request,$id){
        $student = Student::find($id);
        $student->name = $Request->input('name');
        $student->phone = $Request->input('phone');
        $student->age = $Request->input('age');
        $student->save();
        return 'Student data has been updated successfully! To view student list <a href="/list">Click here!</a>';
    }
    public function delete($id){
        $student = Student::find($id);
        $student->delete();
        return 'Student data has been deleted successfully!';
    }
}

