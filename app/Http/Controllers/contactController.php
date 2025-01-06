<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    public function index(){
        $contact = contact::paginate(20);
        return view('admin.contact', compact('contact'));
    }
    
    public function tambah(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required',
        ], [
            'nama.required' => 'nama harus diisi.',
            'email.required' => 'email harus diisi.',
            'pesan.required' => 'pesan harus diisi.',
        ]);

        // simpan data ( simple )
        $data = new contact();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->pesan = $request->pesan;
        $data->save();

        return redirect()->back()->with('success', 'inputan berhasil ditambahkan');
    }

    public function hapus($id){
        $data= contact::findOrFail($id);
        $data->delete();
        return redirect()->back()->withErrors('gagal hapus');
    }

}