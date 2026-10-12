<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas=Kelas::withcount('siswas')->get();
        return view ('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kelas'      => 'required|string|max:255',
            'tingkat'         => 'required|string|max:255',
            'jurusan'         => 'required|string|max:255',
            'tahun_ajaran'    => 'required|string|max:255',
        ]);
        Kelas::create($validated);
        return redirect()->route('kelas.index')->with('success', 'data berhasil ditambah cuyy');
    }

    public function edit(Kelas $kela)
    {
        return view('kelas.edit', compact('kela'));
    }

    public function update(Request $request, Kelas $kela)
    {
         $validated = $request->validate([
            'nama_kelas'      => 'required|string|max:255',
            'tingkat'         => 'required|string|max:255',
            'jurusan'         => 'required|string|max:255',
            'tahun_ajaran'    => 'required|string|max:255',
        ]);
        $kela->update($validated);
        return redirect()->route('kelas.index')->with('success', 'data berhasil diperbarui cuyy');
    }

    public function destroy(Kelas $kela)
    {
        $kela->delete();
        return redirect()-> route ('kelas.index')->with('success', 'data berhasil dihapus');
    }
}

