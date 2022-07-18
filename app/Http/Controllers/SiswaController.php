<?php

namespace App\Http\Controllers;

use App\Siswa;

//use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function tampil()
    {
        //menampilkan semua data dari model siswa
        //dari tabel / migrations siswas
        //atau sama dengan query 
        //select * from siswas
        $siswa = Siswa::all();
        return view('siswa.index',['siswa'=>$siswa]);
    }
}
