<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['name' => 'John Doe']);
});

// Tugas 1 buat 2 rute baru
// 1. /blog yang menampilkan 2 buah artikel dengan judul dan isi artikel
// 2. /contact yang menampilkan halaman kontak dengan form input nama, email, dan pesan
Route::get('/blog', function(){
    $articles1 = ['title' => 'Artikel Pertama', 'content' => 'Ini adalah isi dari artikel pertama.'];
    $articles2 = ['title' => 'Artikel Kedua',   'content' => 'Ini adalah isi dari artikel kedua.' ];
    return view('blog', ['articles1' => $articles1, 'articles2' => $articles2]);
});

Route::get('/contact', function(){
    $contact = [
        'name' => 'Iman Banik',
        'email' => 'nepaolba@gmail.com',
        'message' => "Halo, saya ingin menghubungi Anda untuk informasi lebih lanjut."
    ];
    return view('contact', ['contact' => $contact]);
});
