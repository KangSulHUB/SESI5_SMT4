<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; 

class InfoController extends Controller
{
    public function halo() 
    { 
        return "Halo! Ini adalah respon dari InfoController."; 
    } 

    public function kampus() 
    { 
        return "Saya kuliah di STMIK IKMI Cirebon."; 
    } 

    public function dosen(): View 

    { 
        // 1. Menyiapkan data dalam variabel 
        $namaDosen = "Rudi Kurniawan, S.Kom., M.T."; 
        $matkul = "Pemrograman Web Lanjut"; 
        $mahasiswa = ["Andi", "Budi", "Siti", "Dedi", "SULTAN","MAULANA"];
        $tahun = "2025/2026"; // Contoh data Array  
        // 2. Mengirim data ke view menggunakan fungsi compact() atau array 
        return view('info_dosen', ['nama' => $namaDosen, 
            'mata_kuliah' => $matkul, 
            'list_mhs' => $mahasiswa,
            'tahun' => $tahun
        ]); 
    } 

    public function detailMahasiswa($nama, $nim): View 
    { 
        return view('detail_mahasiswa', [ 
            'nama_mhs' => $nama,
            'nim_mhs' => $nim
            ]); 

    } 




}
