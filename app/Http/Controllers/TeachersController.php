<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = teachers::all();
        return view('admin.teachers.index', compact('teachers'));
    }
}