<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InstructorsController extends Controller
{
    public function index()
    {
        $instructors = DB::table('Instructors')->get();
        return view('instructors/index',compact('instructors'));
    }

    public function create()
    {
        return view('instructors/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'instructor_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'specialization' => 'required',
            'hire_date' => 'required',
        ]);

        try {
        DB::table('Instructors')->insert([
            'instructor_id' => $request->instructor_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'specialization' => $request->specialization,
            'hire_date' => $request->hire_date,
        ]);
        return redirect()->route('instructors.index')->with('Success','Instructor created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('instructors.index')->with('Error','Failed to create Instructor.');
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $instructors = DB::table('Instructors')->where('instructor_id',$id)->get();
        return view('instructors/edit',compact('instructors'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'instructor_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'specialization' => 'required',
            'hire_date' => 'required',
        ]);

        try {
        DB::table('Instructors')->where('instructor_id',$id)
        ->update([
            'instructor_id' => $request->instructor_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'specialization' => $request->specialization,
            'hire_date' => $request->hire_date,
        ]);
        return redirect()->route('instructors.index')->with('Success','Instructor created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('instructors.index')->with('Error','Failed to create Instructor.');
        }
    }

    public function destroy(string $id)
    {
        DB::table('Instructors')->where('instructor_id',$id)->delete();
        return redirect()->route('instructors.index')->with('Success','Instructor deleted successfully.');
    }
}
