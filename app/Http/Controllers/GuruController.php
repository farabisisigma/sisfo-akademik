<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();
        return view('guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
       $validated = $request->validate([
        'nip'          =>'required|unique:gurus,nip',
        'nama'         =>'required|string|max:255',
        'jenis_kelamin'=>'required',
        'email'        =>'required|email',
        'no_hp'        =>'required',
        'alamat'       =>'required',
       ]);
       guru::create($validated);
       return redirect()->route('guru.index')->with('success','data guru berhasil ditambahin boss');
    }

    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $validated = $request->validate([
        'nip'          =>'required|unique:gurus,nip,' . $guru->id,
        'nama'         =>'required|string|max:255',
        'jenis_kelamin'=>'required',
        'email'        =>'required|email',
        'no_hp'        =>'required',
        'alamat'       =>'required',
       ]);
       $guru->update($validated);
       return redirect()->route('guru.index')->with('success','data guru berhasil diperbarui boss');
    }

    public function destroy(Guru $guru)
    {
       $guru->delete();
       return redirect()->route('guru.index')->with('success', 'data guru berhasil dihapus');
    }
}

