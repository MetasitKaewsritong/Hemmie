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
        $request->validate([
            'instrument_id' => 'required',
            'instrument_name' => 'required',
            'category' => 'required',
            'rental_price' => 'required',
        ]);

        try {
        DB::table('Instruments')->insert([
            'instrument_id' => $request->instrument_id,
            'instrument_name' => $request->instrument_name,
            'category' => $request->category,
            'rental_price' => $request->rental_price,
        ]);
        return redirect()->route('instruments.index')->with('Success','Instrument created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('instruments.index')->with('Error','Failed to create Instrument.');
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $instruments = DB::table('Instruments')->where('instrument_id',$id)->get();
        return view('instruments/edit',compact('instruments'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'instrument_id' => 'required',
            'instrument_name' => 'required',
            'category' => 'required',
            'rental_price' => 'required',
        ]);

        try {
        DB::table('Instruments')->where('instrument_id',$id)
        ->update([
            'instrument_id' => $request->instrument_id,
            'instrument_name' => $request->instrument_name,
            'category' => $request->category,
            'rental_price' => $request->rental_price,
        ]);
        return redirect()->route('instruments.index')->with('Success','Instrument created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('instruments.index')->with('Error','Failed to create Instrument.');
        }
    }

    public function destroy(string $id)
    {
        try {
        DB::table('Instruments')->where('instrument_id', $id)->delete();
        return redirect()->route('instruments.index')->with('Success', 'Instrument deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('instruments.index')->with('Error', 'Failed to delete Instrument.');
        }
    }
}
