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
    $title = "Sistem Sekolah - Detail Siswa";

    $student = [
        'id' => $id,
        'nis' => '2024001',
        'name' => 'Budi Ariyanto',
        'gender' => 'L',
        'major' => 'AKL',
        'class' => 'XII AKL 1',
    ];

    return view('students.show', compact('title', 'student'));
}

public function edit(string $id)
{
    $title = "Sistem Sekolah - Edit Siswa";

    $student = [
        'id' => $id,
        'nis' => '2024001',
        'name' => 'Budi Ariyanto',
        'gender' => 'L',
        'major' => 'AKL',
        'class' => 'XII AKL 1',
    ];

    return view('students.edit', compact('title', 'student'));
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