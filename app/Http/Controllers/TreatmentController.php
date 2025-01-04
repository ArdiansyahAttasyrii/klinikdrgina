<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $treatment = DB::table('tbl_treatment')->get();

        return view('pages.treatment.index', compact('treatment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.treatment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:2',
            'harga' => 'required|min:2',
            'foto' => 'required|mimes:png,jpg,jpeg',
        ]);

        $namaGambar = time() . '.' . $request->foto->extension();
        $path = $request->foto->storeAs('images', $namaGambar, 'public');

        DB::table('tbl_treatment')->insert([
            'name' => $request->nama,
            'harga' => $request->harga,
            'foto' =>  $path,
        ]);

        return redirect('treatment');
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
        $treatment = DB::table('tbl_treatment')->where('id', $id)->first();

        return view('pages.treatment.edit', compact('treatment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image|max:2048',
        ]);
        $treatment = DB::table('tbl_treatment')->where('id', $id)->first();

        if ($request->file('foto')) {
            if ($treatment->foto) {
                Storage::disk('public')->delete($treatment->foto);
            }
            $filePath = $request->file('foto')->store('treatment', 'public');
        } else {
            $filePath = $treatment->foto;
        }

        DB::table('tbl_treatment')->where('id', $id)->update([
            'name' => $request->nama,
            'harga' => $request->harga,
            'foto' => $filePath,
            'updated_at' => now(),
        ]);

        return redirect('treatment');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $treatment = DB::table('tbl_treatment')->where('id', $id)->first();

        if ($treatment->foto) {
            Storage::disk('public')->delete($treatment->foto);
        }

        DB::table('tbl_treatment')->where('id', $id)->delete();

        return redirect('treatment');
    }
}
