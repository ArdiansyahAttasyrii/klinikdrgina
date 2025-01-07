<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = DB::table('tbl_pasien')->get();
        return view('pages.pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.pasien.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'tempat_tanggallahir' => 'required|min:2',
            'alamat' => 'required|min:2',
            'kontak' => 'required|min2',
            'foto' => 'required|mimes:png,jpg,jpeg',
        ]);

        $namaGambar = time() . '.' . $request->foto->extension();
        $path = $request->foto->storeAs('images', $namaGambar, 'public');

        DB::table('tbl_pasien')->insert([
            'name' => $request->name,
            'tempat_tanggallahir' => $request->tempat_tanggallahir,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'foto' =>  $path,
        ]);

        return redirect('pasien');
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
        $pasien = DB::table('tbl_pasien')->where('id', $id)->first();

        return view('pages.pasien.index', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'tempat_tanggallahir' => 'required|string|',
            'kontak' => 'required|numeric',
            'foto' => 'nullable|image|max:2048',
        ]);
        $treatment = DB::table('tbl_pasien')->where('id', $id)->first();

        if ($request->file('foto')) {
            if ($pasien->foto) {
                Storage::disk('public')->delete($pasien->foto);
            }
            $filePath = $request->file('foto')->store('pasien', 'public');
        } else {
            $filePath = $pasien->foto;
        }

        DB::table('tbl_pasien')->where('id', $id)->update([
            'name' => $request->name,
            'tempat_tanggallahir' => $request->tempat_tanggallahir,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'foto' => $filePath,
            'updated_at' => now(),
        ]);

        return redirect('pasien');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pasien = DB::table('tbl_pasien')->where('id', $id)->first();

        if ($pasien->foto) {
            Storage::disk('public')->delete($pasien->foto);
        }

        DB::table('tbl_pasien')->where('id', $id)->delete();

        return redirect('pasien');
    }
}
