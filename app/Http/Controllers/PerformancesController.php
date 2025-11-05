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
