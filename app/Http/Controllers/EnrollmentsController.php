<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EnrollmentsController extends Controller
{
    public function index()
    {
        $enrollments = DB::table('Enrollments')->get();
        return view('enrollments/index',compact('enrollments'));
    }

    public function create()
    {
        $students = DB::table('Students')->get();
        $courses = DB::table('Courses')->get();
        $instructors = DB::table('Instructors')->get();
        return view('enrollments/create',compact('students','courses','instructors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'enrollment_id' => 'required',
            'student_id' => 'required',
            'course_id' => 'required',
            'instructor_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
        ]);

        try {
        DB::table('Enrollments')->insert([
            'enrollment_id' => $request->enrollment_id,
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'instructor_id' => $request->instructor_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
        ]);
        return redirect()->route('enrollments.index')->with('Success','Enrollment created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('enrollments.index')->with('Error','Failed to create Enrollment.');
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $enrollments = DB::table('Enrollments')->where('enrollment_id',$id)->get();
        $students = DB::table('Students')->get();
        $courses = DB::table('Courses')->get();
        $instructors = DB::table('Instructors')->get();
        return view('enrollments/edit',compact('enrollments','students','courses','instructors'));
    }

    public function update(Request $request,string $id)
    {
        $request->validate([
            'enrollment_id' => 'required',
            'student_id' => 'required',
            'course_id' => 'required',
            'instructor_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
        ]);
        
        try {
        DB::table('Enrollments')->where('enrollment_id',$id)
        ->update([
            'enrollment_id' => $request->enrollment_id,
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'instructor_id' => $request->instructor_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
        ]);
        return redirect()->route('enrollments.index')->with('Success','Enrollment created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('enrollments.index')->with('Error','Failed to create Enrollment.');
        }
    }

    public function destroy(string $id)
    {
        DB::table('Enrollments')->where('enrollment_id', $id)->delete();
        return redirect()->route('enrollments.index')->with('Success','Enrollment deleted successfully.');
    }
}
