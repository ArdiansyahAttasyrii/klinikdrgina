<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JanjitemuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $janjitemu = DB::table('tbl_janjitemu')->get();
        return view('pages.janji_temu.index', compact('janjitemu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.janji_temu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:2',
            'date' => 'required|min:2',
            'tanggal_temu' => 'required|min:2',
            'no_telpon' => 'required|min:2',
            'email' => 'required|min:2',
            'no_antrian' => 'required|min:2',
        ]);

        DB::table('tbl_janjitemu')->insert([
            'nama' => $request->nama,
            'tanggal_temu' => $request->tanggal_temu,  
            'no_telpon' => $request->no_telpon,        
            'email' => $request->email,
            'no_antrian' => $request->no_antrian,
        ]);

        return redirect('janji_temu');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implement show functionality
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $janjitemu = DB::table('tbl_janjitemu')->where('id', $id)->first();
        return view('pages.janji_temu.edit', compact('janjitemu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_temu' => 'required|date',
            'no_telpon' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'no_antrian' => 'required|numeric',
        ]);

        DB::table('tbl_janjitemu')->where('id', $id)->update([
            'nama' => $request->nama,
            'tanggal_temu' => $request->tanggal_temu,  
            'no_telpon' => $request->no_telpon,        
            'email' => $request->email,
            'no_antrian' => $request->no_antrian,
            'updated_at' => now(),
        ]);

        return redirect('janji_temu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tbl_janjitemu')->where('id', $id)->delete();
        return redirect('janji_temu');
    }
}
