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
        return view('lessons/create');
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
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
