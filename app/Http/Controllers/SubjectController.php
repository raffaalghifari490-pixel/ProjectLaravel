<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;
use App\Models\Teachers;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = subjects::all();
        return view('admin.subject.index', compact('subjects'));
    }

}