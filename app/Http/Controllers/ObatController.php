<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obat = DB::table('tbl_obat') ->get();
        return view('pages.obat.index', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:2',
            'harga' => 'required|min:2',
            'jenis' => 'required|min:2',
            'stok' => 'required|min:2',
            'foto' => 'required|mimes:png,jpg,jpeg',
        ]);

        $namaGambar = time() . '.' . $request->foto->extension();
        $path = $request->foto->storeAs('images', $namaGambar, 'public');

        DB::table('tbl_obat')->insert([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jenis' => $request->jenis,
            'stok' => $request->stok,
            'foto' =>  $path,
        ]);

        return redirect('obat');
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
        $obat = DB::table('tbl_obat')->where('id', $id)->first();

        return view('pages.obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'jenis' => 'required|string|max:255',
            'stok' => 'required|numeric',
            'foto' => 'nullable|image|max:2048',
        ]);
        $obat = DB::table('tbl_obat')->where('id', $id)->first();

        if ($request->file('foto')) {
            if ($obat->foto) {
                Storage::disk('public')->delete($obat->foto);
            }
            $filePath = $request->file('foto')->store('obat', 'public');
        } else {
            $filePath = $obat->foto;
        }

        DB::table('tbl_obat')->where('id', $id)->update([
            'name' => $request->nama,
            'harga' => $request->harga,
            'jenis' => $request->jenis,
            'stok' => $request->stok,
            'foto' => $filePath,
            'updated_at' => now(),
        ]);

        return redirect('obat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obat = DB::table('tbl_obat')->where('id', $id)->first();

        if ($obat->foto) {
            Storage::disk('public')->delete($obat->foto);
        }

        DB::table('tbl_obat')->where('id', $id)->delete();

        return redirect('obat');
    }
}
