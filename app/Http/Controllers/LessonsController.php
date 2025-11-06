<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LessonsController extends Controller
{
    public function index()
    {
        $lessons = DB::table('Lessons')->get();
        return view('lessons/index',compact('lessons'));
    }

    public function create()
    {
        $enrollments = DB::table('Enrollments')->get();
        return view('lessons/create',compact('enrollments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lesson_id' => 'required',
            'enrollment_id' => 'required',
            'lesson_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'attendance' => 'required',
            'notes' => 'required',
        ]);

        try {
        DB::table('Lessons')->insert([
            'lesson_id' => $request->lesson_id,
            'enrollment_id' => $request->enrollment_id,
            'lesson_date' => $request->lesson_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'attendance' => $request->attendance,
            'notes' => $request->notes,
        ]);
        return redirect()->route('lessons.index')->with('Success','Lesson created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('lessons.index')->with('Error','Failed to create Lesson.');
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $lessons = DB::table('Lessons')->where('lesson_id',$id)->get();
        $enrollments = DB::table('Enrollments')->get();
        return view('lessons/edit',compact('lessons','enrollments'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'lesson_id' => 'required',
            'enrollment_id' => 'required',
            'lesson_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'attendance' => 'required',
            'notes' => 'required',
        ]);

        try {
        DB::table('Lessons')->where('lesson_id',$id)
        ->update([
            'lesson_id' => $request->lesson_id,
            'enrollment_id' => $request->enrollment_id,
            'lesson_date' => $request->lesson_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'attendance' => $request->attendance,
            'notes' => $request->notes,
        ]);
        return redirect()->route('lessons.index')->with('Success','Lesson created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('lessons.index')->with('Error','Failed to create Lesson.');
        }
    }

    public function destroy(string $id)
    {
        DB::table('Lessons')->where('lesson_id',$id)->delete();
        return redirect()->route('lessons.index')->with('Success','Lesson deleted successfully.');
    }
}
