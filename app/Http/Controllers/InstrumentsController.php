<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InstrumentsController extends Controller
{
    public function index()
    {
        $instruments = DB::table('Instruments')->get();
        return view('instruments/index',compact('instruments'));
    }

    public function create()
    {
        return view('instruments/create');
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
