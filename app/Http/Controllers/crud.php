<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guru;
use App\siswa;
use App\kontak;

class crud extends Controller
{
    //ini yg untuk umum

    public function tampilguru() {
        $dataguruumum = guru::orderBy('nama', 'asc')->paginate(5);
        return view('/guru/guru', ['guruumum' => $dataguruumum]);
    }

    public function tampilsiswa() {
        $datasiswaumum = siswa::orderBy('nama', 'asc')->paginate(5);
        return view('/siswa/siswa', ['siswaumum' => $datasiswaumum]);
    }



    //ini yg untuk admin

    //guru-admin

    public function tampilguruadmin() {
    	$dataguru = guru::orderBy('nama', 'asc')->paginate(5);
    	return view('guru/guru-admin', ['dataguru' => $dataguru]);
    }

    public function tambahguru(Request $req) {
        $this->validate($req, [
            'nama' => 'required',
            'nip' => 'required',
            'pelajaran' => 'required'
        ]);
        guru::create([
            'nama' => $req->nama,
            'nip' => $req->nip,
            'pelajaran' => $req->pelajaran
        ]);
        return redirect()->back();
    }

    public function hapusguru($id)
    {
        $guru = guru::find($id);
        $guru->delete();
        return redirect()->back();
    }

    //siswa-admin

    public function tampilsiswaadmin() {
    	$datasiswa = siswa::orderBy('nama', 'asc')->paginate(5);
    	return view('siswa/siswa-admin', ['datasiswa' => $datasiswa]);
    }

    public function tambahsiswa(Request $req) {
        $this->validate($req, [
            'nama' => 'required',
            'nis' => 'required',
            'gender' => 'required',
            'kelas' => 'required'
        ]);
        siswa::create([
            'nama' => $req->nama,
            'nis' => $req->nis,
            'gender' => $req->gender,
            'kelas' => $req->kelas
        ]);
        return redirect()->back();
    }

    public function hapussiswa($id)
    {
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect()->back();
    }

    //kontak-umum

    public function tambahkontak(Request $req) {
        $this->validate($req, [
            'nama' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'pesan' => 'required'
        ]);
        kontak::create([
            'nama' => $req->nama,
            'email' => $req->email,
            'telepon' => $req->telepon,
            'pesan' => $req->pesan
        ]);
        return redirect()->back();
    }
}
