<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = DB::table('Courses')->get();
        return view('courses/index',compact('courses'));
    }

    public function create()
    {
        $instruments = DB::table('Instruments')->get();
        return view('courses/create',compact('instruments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'course_name' => 'required',
            'instrument_id' => 'required',
            'level' => 'required',
            'duration_weeks' => 'required',
            'price' => 'required',
        ]);

        try {
        DB::table('Courses')->insert([
            'course_id' => $request->course_id,
            'course_name' => $request->course_name,
            'instrument_id' => $request->instrument_id,
            'level' => $request->level,
            'duration_weeks' => $request->duration_weeks,
            'price' => $request->price,
        ]);
        return redirect()->route('courses.index')->with('Success','Course created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('courses.index')->with('Error','Failed to create Course.');
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $courses = DB::table('Courses')->where('course_id',$id)->get();
        $instruments = DB::table('Instruments')->get();
        return view('courses/edit',compact('courses','instruments'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'course_id' => 'required',
            'course_name' => 'required',
            'instrument_id' => 'required',
            'level' => 'required',
            'duration_weeks' => 'required',
            'price' => 'required',
        ]);

        try {
        DB::table('Courses')->where('course_id',$id)
        ->update([
            'course_id' => $request->course_id,
            'course_name' => $request->course_name,
            'instrument_id' => $request->instrument_id,
            'level' => $request->level,
            'duration_weeks' => $request->duration_weeks,
            'price' => $request->price,
        ]);
        return redirect()->route('courses.index')->with('Success','Course created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('courses.index')->with('Error','Failed to create Course.');
        }
    }

    public function destroy(string $id)
    {
        DB::table('Courses')->where('course_id',$id)->delete();
        return redirect()->route('courses.index')->with('Success','Course deleted successfully.');
    }
}
