<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
        public function index() {
            $mhs = Mahasiswa::paginate(5); //Mengakses kelas model
            return view('mahasiswa', ['mhs' => $mhs]);
        }

        public function tambah() {
            return view('create');
        }

        public function simpan(Request $request) {
            $bhs = implode(",", $request->get('bahasa'));
            Mahasiswa::create([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jurusan' => $request->jurusan,
                'bahasa' => $bhs
            ]);
            return redirect("/mahasiswa")->with('create','Data berhasil di Tambahkan');
        }

        public function ubah($id) {
            $mhs = Mahasiswa::find($id);
            return view('edit', ['mhs' => $mhs]);
        }

        public function update($id, Request $request) {
            $bhs = implode(",", $request->get('bahasa'));
            $mhs = Mahasiswa::find($id);
            $mhs->nim = $request->nim;
            $mhs->nama = $request->nama;
            $mhs->jenis_kelamin = $request->jenis_kelamin;
            $mhs->jurusan = $request->jurusan;
            $mhs->bahasa = $bhs;
            $mhs->save();
            return redirect("/mahasiswa")->with('edit','Data berhasil di Ubah');
        }

        public function delete($id) {
            $mhs = Mahasiswa::find($id);
            $mhs->delete();
            return redirect('/mahasiswa')->with('delete','Data berhasil di Hapus');
        }

        public function search(Request $request) {
            $cari = $request->key;
            $mhs = Mahasiswa::where('nama','like',"%".$cari."%")->paginate();
            return view('mahasiswa',['mhs' => $mhs]);
        }
}
