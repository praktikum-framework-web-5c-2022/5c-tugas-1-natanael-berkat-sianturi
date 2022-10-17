<?php

use Illuminate\Support\Facades\Route;

Route::get('/dosen', function(){
    $list_dosen = ["Kamal Prihandani", "Aji Primajaya", "Betha Nurina Sari", "Carudin", "Intan Purnamasari", "Iqbal Maulana",
    "Oman Kamarudin", "Dadang Yusuf", "Rini Mayasari", "Tesa Nur Padila"];
    return view('dosen')->with('dosen_s', $list_dosen);
});

Route::get('/matakuliah', function(){
    $list_matakuliah = ["Framewrok PW", "Pemrograman Berbasis Mobile", "Blockchain", "Technopreneur", "Data Mining", "Cloud Computing", "Algoritma",
    "Machine Learning", "Matematika Diskrit", "Struktur Data"];
    return view('matakuliah')->with('matakuliah_s', $list_matakuliah);
});

Route::get('/mahasiswa', function(){
    $list_mahasiswa = ["Natanael Sianturi", "Immanuel", "Kristoper", "Agung", "Zainal", "Udin",
    "Karno", "Silvana", "Alucard", "Lancelot"];
    return view('mahasiswa')->with('mahasiswa_s', $list_mahasiswa);
});


