<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    
    public function create()
    {
        $prodi = Prodi::all();
        return view('mahasiswa.create', compact('prodi'));
    }

    
    public function store(Request $request)
    {
        // validasi input
        $input = $request->validate([
            'npm' => 'required|unique:mahasiswa',
            'nama' => 'required',
            'jk' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'asal_sma' => 'required',
            'prodi_id' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto'); // ambil file foto
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename); // simpan foto ke folder public/images
            $input['foto'] = $filename; // simpan nama file baru ke $input
        }
        // simpan data ke tabel mahasiswa
        Mahasiswa::create($input);
        // redirect ke route mahasiswa.index
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        // dd($mahasiswa)
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

   
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
