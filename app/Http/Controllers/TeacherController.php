<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Guru";

        $teachers = [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone' => '081234560001',
                'status' => 'Aktif',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone' => '081234560002',
                'status' => 'Aktif',
            ],
        ];

        return view('teachers.index', compact('title', 'teachers'));
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Guru";

        return view('teachers.create', compact('title'));
    }

    public function store(Request $request)
    {
        return redirect()->route('teachers.index');
    }

public function show(string $id)
{
    $title = 'Sistem Sekolah - Detail Guru';

    $teachers = [
        [
            'id' => 1,
            'nip' => '198501012024',
            'name' => 'Budi Santoso',
            'gender' => 'Laki-Laki',
            'subject' => 'Akuntansi Dasar',
            'phone' => '081234560001',
            'status' => 'Aktif',
        ],
        [
            'id' => 2,
            'nip' => '198703152024',
            'name' => 'Siti Aminah',
            'gender' => 'Perempuan',
            'subject' => 'Jaringan Komputer',
            'phone' => '081234560002',
            'status' => 'Aktif',
        ],
    ];

    $teacher = collect($teachers)->firstWhere('id', (int) $id);

    return view('teachers.show', compact('title', 'teacher'));
}

public function edit(string $id)
{
    $title = 'Sistem Sekolah - Edit Guru';

    $teachers = [
        [
            'id' => 1,
            'nip' => '198501012024',
            'name' => 'Budi Santoso',
            'gender' => 'Laki-Laki',
            'subject' => 'Akuntansi Dasar',
            'phone' => '081234560001',
            'status' => 'Aktif',
        ],
        [
            'id' => 2,
            'nip' => '198703152024',
            'name' => 'Siti Aminah',
            'gender' => 'Perempuan',
            'subject' => 'Jaringan Komputer',
            'phone' => '081234560002',
            'status' => 'Aktif',
        ],
    ];

    $teacher = collect($teachers)->firstWhere('id', (int) $id);

    return view('teachers.edit', compact('title', 'teacher'));
}

    public function update(Request $request, string $id)
    {
        return redirect()->route('teachers.index');
    }

    public function destroy(string $id)
    {
        return redirect()->route('teachers.index');
    }
}