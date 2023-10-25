<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    public function index()
    {   'ID mahasiswa' => "1234556",
        'nama matakuliah' => "web programing",
        'jurusan' => "sistem komputer4",
    }

    public function create()
    {   'ID mahasiswa' => "2201020078",
        'nama matakuliah' => "OOP",
        'jurusan' => "sistem komputer(sk)",
    }

    public function show($id)
    {   'ID mahasiswa' => "12345630",
        'nama matakuliah' => "SENSOR",
        'jurusan' => "sistem komputer",
    }
}
