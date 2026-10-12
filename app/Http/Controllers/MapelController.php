<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
       $mapels = mapel::all();
       return view('mapel.index', compact('mapels'));
    }

    public function create()
    {
        return view('mapel.create');
    }

    public function store(Request $request)
    {
       $validated = $request->validate([
        'kode_mapel'          =>'required|unique:mapels,kode_mapel',
        'nama_mapel'          =>'required|string|max:255',
        'kkm'                 =>'required|integer|min:0|max:100',
         ]);
       mapel::create($validated);
       return redirect()->route('mapel.index')->with('success','data mapel berhasil ditambahin boss');
    }

    public function edit(Mapel $mapel)
    {
       return view('mapel.edit', compact('mapels'));
    }

    public function update(Request $request, Mapel $mapel)
    {
        $validated = $request->validate([
        'kode_mapel'          =>'required|unique:mapels,kode_mapel',
        'nama_mapel'          =>'required|string|max:255',
        'kkm'                 =>'required|integer|min:0|max:100',
         ]);
       $mapel->update($validated);
       return redirect()->route('mapel.index')->with('success','data mapel berhasil diupdate boss');
    }

    public function destroy(Mapel $mapel)
    {
        $mapel->delete();
       return redirect()->route('mapel.index')->with('success', 'data mapel berhasil dihapus');
    }
}

