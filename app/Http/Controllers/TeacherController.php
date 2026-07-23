<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
        public function index()
    {
        return "Ini adalah halaman daftar guru";
    }

    public function show(string $id)
    {
        return "Menampilkan detail guru dengan ID: {$id}";
    }
    
    public function create()
    {
        return "Menampilkan halaman tammbah guru";
    }

    public function edit(string $id)
    {
        return "Menampilkan halaman edit guru";
    } 

    public function store()
    {
        return "melakukkan penambahan data guru";
    }

    public function update(string $id)
    {
        return "Melakukkan perubahan data guru {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data guru {$id}";
    }

}
