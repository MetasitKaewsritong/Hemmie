<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentsController extends Controller
{
    public function index()
    {
        $students = DB::table('Students')->get();
        return view('students/index',compact('students'));
    }

    public function create()
    {
        return view('students/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'registration_date' => 'required',
        ]);

        try {
        DB::table('Students')->insert([
            'student_id' => $request->student_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'phone' => $request->phone,
            'registration_date' => $request->registration_date,
        ]);
        return redirect()->route('students.index')->with('Success','Student created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('students.index')->with('Error','Failed to create Student.');
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $students = DB::table('Students')->where('student_id',$id)->get();
        return view('students/edit',compact('students'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'student_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'registration_date' => 'required',
        ]);

        try {
        DB::table('Students')->where('student_id',$id)
        ->update([
            'student_id' => $request->student_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'phone' => $request->phone,
            'registration_date' => $request->registration_date,
        ]);
        return redirect()->route('students.index')->with('Success','Student created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('students.index')->with('Error','Failed to create Student.');
        }
    }

    public function destroy(string $id)
    {
        try {
        DB::table('Students')->where('student_id', $id)->delete();
        return redirect()->route('students.index')->with('Success', 'Student deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('students.index')->with('Error', 'Failed to delete Student.');
        }
    }
}
