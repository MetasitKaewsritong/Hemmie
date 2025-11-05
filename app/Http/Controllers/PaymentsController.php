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
        $request->validate([
            'payment_id' => 'required',
            'student_id' => 'required',
            'amount' => 'required',
            'payment_date' => 'required',
            'payment_method' => 'required',
        ]);

        DB::table('Payments')->insert([
            'payment_id' => $request->payment_id,
            'student_id' => $request->student_id,
            'amount' => $request->amount,
            'payment_date' => $request->payment_date,
            'payment_method' => $request->payment_method,
        ]);

        return redirect()->route('payments.index')->with('Success','Payment created successfully.');
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
