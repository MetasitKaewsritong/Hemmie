<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PerformancesController extends Controller
{
    public function index()
    {
        $performances = DB::table('Performances')->get();
        return view('performances/index',compact('performances'));
    }

    public function create()
    {
        return view('performances/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'performance_id' => 'required',
            'performance_name' => 'required',
            'performance_date' => 'required',
            'venue' => 'required',
            'description' => 'required',
        ]);

        DB::table('Performances')->insert([
            'performance_id' => $request->performance_id,
            'performance_name' => $request->performance_name,
            'performance_date' => $request->performance_date,
            'venue' => $request->venue,
            'description' => $request->description,
        ]);

        return redirect()->route('performances.index')->with('Success','Performance created successfully.');
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
