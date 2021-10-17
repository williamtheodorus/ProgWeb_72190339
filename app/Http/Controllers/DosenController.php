<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class DosenController extends Controller
{
    public function index() {
        $dos = Dosen::paginate(5); //Mengakses kelas model
        return view('dosen', ['dos' => $dos]);
    }

    public function tambah() {
        return view('tambah');
    }

    public function simpan(Request $request) {
        $bhs = implode(",", $request->get('bahasa'));
        Dosen::create([
            'nid' => $request->nid,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jurusan' => $request->jurusan,
            'bahasa' => $bhs
        ]);
        return redirect("/dosen")->with('tambah','Data berhasil di Tambahkan');
    }

    public function ubah($id) {
        $dos = Dosen::find($id);
        return view('ubah', ['dos' => $dos]);
    }

    public function update($id, Request $request) {
        $bhs = implode(",", $request->get('bahasa'));
        $dos = Dosen::find($id);
        $dos->nid = $request->nid;
        $dos->nama = $request->nama;
        $dos->jenis_kelamin = $request->jenis_kelamin;
        $dos->jurusan = $request->jurusan;
        $dos->bahasa = $bhs;
        $dos->save();
        return redirect("/dosen")->with('ubah','Data berhasil di Ubah');
    }

    public function delete($id) {
        $dos = Dosen::find($id);
        $dos->delete();
        return redirect('/dosen')->with('hapus','Data berhasil di Hapus');
    }

    public function search(Request $request) {
        $cari = $request->key;
        $dos = Dosen::where('nama','like',"%".$cari."%")->paginate();
        return view('dosen',['dos' => $dos]);
    }
}
