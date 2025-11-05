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
