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
