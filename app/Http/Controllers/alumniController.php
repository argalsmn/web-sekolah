<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use Illuminate\Http\Request;

class alumniController extends Controller
{
    //
    public function index(){
        $alumni = alumni::paginate(20);
        return view('admin.alumni', compact('alumni'));
    }
    
    public function tambah(Request $request)
    {
        $request->validate([
            'universitas' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
        ], [
            'universitas.required' => 'universitas harus diisi.',
            'nama.required' => 'nama harus diisi.',
            'jurusan.required' => 'jurusan harus diisi.',
        ]);

        // simpan data ( simple )
        $data = new alumni();
        $data->universitas = $request->universitas;
        $data->nama = $request->nama;
        $data->jurusan = $request->jurusan;
        $data->save();

        return redirect()->back()->with('success', 'inputan berhasil ditambahkan');
    }
    
    public function hapus($id){
        $data= alumni::findOrFail($id);
        $data->delete();
        return redirect()->back()->withErrors('gagal hapus');
    }
}