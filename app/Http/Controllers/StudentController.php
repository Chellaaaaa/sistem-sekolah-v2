<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sitem Sekolah - Daftar Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII TKJ 2',
                'major' => 'TKJ'
            ],
            [
                'id' => 3,
                'nis' => '1003',
                'name' => 'Nina',
                'class' => 'XII TKJ 3',
                'major' => 'AKL'
            ],
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function create()
    {
        $title = "Sitem Sekolah - Tambah Siswa";

        return view('students.create', [
            'title' => $title
        ]);
    }

    public function store(Request $request)
    {
        return "Melakukan penambahan data siswa";
    }
    
    public function show(string $id)
    {
        $title = "Sitem Sekolah - Detail Siswa";

        return view('students.show', [
            'title' => $title
        ]);
    }

    public function edit(string $id)
    {
        $title = "Sitem Sekolah - Edit Siswa";
        
        return view('students.edit', [
            'title' => $title
        ]);
    }

    public function update(Request $request, string $id)
    {
        return "Melakukan perubahan data siswa dengan ID{$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }
}