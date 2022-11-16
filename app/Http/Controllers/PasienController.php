<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        return view('frontend.pasien.index');
    }
    public function store(Request $request)
    {
        // Validation Form
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|numeric',
            'jk' => 'required',
            'umur' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
        ]);
        // Insert Data
        Pasien::create([
            'user_id' => auth()->user()->id,
            'no_rm' => rand(100000, 999999) . rand(100000, 999999),
            'nama' => $request->nama,
            'umur' => $request->umur,
            'nik' => $request->nik,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => Carbon::createFromFormat('d-m-Y', $request->tanggal_lahir),
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('Pendaftaran.Index')->with('success', 'Berhasil Mendaftarkan Pasien');
    }

    public function table()
    {
        $pasien = Pasien::where('user_id', auth()->user()->id)->get();
        return view('frontend.pasien.crud.index', compact('pasien'));
    }
}
