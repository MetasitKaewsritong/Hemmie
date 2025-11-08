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

        try {
        DB::table('Performances')->insert([
            'performance_id' => $request->performance_id,
            'performance_name' => $request->performance_name,
            'performance_date' => $request->performance_date,
            'venue' => $request->venue,
            'description' => $request->description,
        ]);
        return redirect()->route('performances.index')->with('Success','Performance created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('performances.index')->with('Error','Failed to create Performance.');
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $performances = DB::table('Performances')->where('performance_id',$id)->get();
        return view('performances/edit',compact('performances'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'performance_id' => 'required',
            'performance_name' => 'required',
            'performance_date' => 'required',
            'venue' => 'required',
            'description' => 'required',
        ]);

        try {
        DB::table('Performances')->where('performance_id',$id)
        ->update([
            'performance_id' => $request->performance_id,
            'performance_name' => $request->performance_name,
            'performance_date' => $request->performance_date,
            'venue' => $request->venue,
            'description' => $request->description,
        ]);
        return redirect()->route('performances.index')->with('Success','Performance created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('performances.index')->with('Error','Failed to create Performance.');
        }
    }

    public function destroy(string $id)
    {
        try {
        DB::table('Performances')->where('performance_id', $id)->delete();
        return redirect()->route('performances.index')->with('Success', 'Performance deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('performances.index')->with('Error', 'Failed to delete Performance.');
        }
    }
}
