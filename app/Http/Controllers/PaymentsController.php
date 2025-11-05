<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PaymentsController extends Controller
{
    public function index()
    {
        $payments = DB::table('Payments')->get();
        return view('payments/index',compact('payments'));
    }

    public function create()
    {
        return view('payments/create');
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
