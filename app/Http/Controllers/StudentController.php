<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = Student::select(['id','nis','name','class','major'])->get();
        
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";

        return view('students.create', [
            'title' => $title
        ]);
    }

    public function store(StoreRequest $request)
    {
        //validasi
        $validatedRequest = $request->validated();

        //Tambahkan Data ke Database
        Student::create($validatedRequest);

        //Handle If Success
        return redirect()->route('students.index');

    }
    

public function show(Student $student)
{
    $title = "Sistem Sekolah - Detail Siswa";

    return view('students.show', [
        'title' => $title,
        'student' => $student
    ]);
}

public function edit(Student $student)
{
    $title = "Sistem Sekolah - Edit Siswa";

    return view('students.edit', [
        'title' => $title,
        'student' => $student
    ]);
}

    public function update(Student $student, UpdateRequest $request)
    {
        $validatedRequest = $request->validated();

        //update Data
        $student->update($validatedRequest);

        //handle if success
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        
        return redirect()->route('students.index');
    }
}