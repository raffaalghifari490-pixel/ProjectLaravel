<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return view('admin.about', [
            'title' => "About",
            'nama' => "Moh. Raffa Al Ghifari",
            'kelas' => "11 PPLG 3",
            ''
        ]);
    }
}
