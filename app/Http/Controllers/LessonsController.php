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
