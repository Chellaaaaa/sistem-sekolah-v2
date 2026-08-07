<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
public function __invoke(Request $request, string $id)
{
    $title = 'Sistem Sekolah - Detail Kelas';

    $classes = [
        [
            'id' => 1,
            'name' => 'XII AKL 1',
            'grade' => 'XII',
            'major' => 'AKL',
            'homeroom_teacher' => 'Budi Santoso',
        ],
        [
            'id' => 2,
            'name' => 'XII TKJ 1',
            'grade' => 'XII',
            'major' => 'TKJ',
            'homeroom_teacher' => 'Siti Aminah',
        ],
    ];

    $class = collect($classes)->firstWhere('id', (int) $id);

    return view('classes.show', compact('title', 'class'));
}
}