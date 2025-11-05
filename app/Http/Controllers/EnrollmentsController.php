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
        return view('enrollments/create');
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
