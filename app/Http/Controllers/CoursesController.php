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
        return view('courses/create');
    }

    public function store(Request $request)
    {
        //
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
