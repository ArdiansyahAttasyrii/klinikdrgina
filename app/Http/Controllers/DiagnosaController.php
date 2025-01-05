<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diagnosa = DB::table('tbl_diagnosa')->get();

        return view('pages.diagnosa.index', compact('diagnosa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.diagnosa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|min:2',
            'keluhan' => 'required|min:2',
            'hasil_diagnosa' => 'required|min:2',
            'tindakan' => 'required|min:2',
        ]);

        return redirect('diagnosa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $diagnosa = DB::table('tbl_diagnosa')->where('id', $id)->first();

        return view('pages.diagnosa.edit', compact('diagnosa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date|max:255',
            'keluhan' => 'required|string|max:255',
            'hasil_diagnosa' => 'required|string|max:255',
            'tindakan' => 'required|string|max:255',
            
        ]);
        $diagnosa = DB::table('tbl_diagnosa')->where('id', $id)->first();

        DB::table('tbl_diagnosa')->where('id', $id)->update([
            'tanggal' => $request->tanggal,
            'keluhan' => $request->keluhan,
            'hasil_diagnosa' => $request->hasil_diagnosa,
            'tindakan' => $request->tindakan,
            'updated_at' => now(),
        ]);

        return redirect('diagnosa');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $diagnosa = DB::table('tbl_diagnosa')->where('id', $id)->first();

        DB::table('tbl_diagnosa')->where('id', $id)->delete();

        return redirect('diagnosa');
    }
}
