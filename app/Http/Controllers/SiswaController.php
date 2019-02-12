<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Siswa;

class SiswaController extends Controller
{
    public function index() {
        $data_siswa = Siswa::all();
        return view('siswa.index', ['data_siswa'=>$data_siswa]);
    }

    public function create(Request $request) {
        Siswa::create($request->all());
        return redirect ('/siswa')->with('sukses', 'Data Berhasil Disimpan');
    }

    public function edit($id) {
        $siswa = Siswa::find($id);
        return view ('siswa.edit', ['siswa'=>$siswa]);
    }

    public function update(Request $request, $id) {
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect ('/siswa')->with('sukses', 'Data Berhasil Diupdate');
    }

    public function delete($id) {
        $siswa = Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses', 'Data Berhasil Dihapus');
    }
}
