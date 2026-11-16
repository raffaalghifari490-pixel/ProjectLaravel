<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classroom;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $classrooms = Classroom::query()->get();
        $students = Student::all();
        return view('admin.student.index', compact('students, classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    
public function store(Request $request)
{
    $validated = $request->validate([
        'nis' => 'required|string|max:20|unique:students,nis',
        'name' => 'required|string|max:255',
        'classroom_id' => 'required|exists:classrooms,id',
        'address' => 'nullable|string|max:255',
    ], [
        'nis.required' => 'NIS wajib diisi.',
        'nis.unique' => 'NIS sudah digunakan.',
        'name.required' => 'Nama siswa wajib diisi.',
        'classroom_id.required' => 'Kelas wajib dipilih.',
        'classroom_id.exists' => 'Kelas tidak ditemukan.',
        'address.string' => 'Format alamat tidak valid.',
    ]);

    Student::create($validated);

    return redirect()
        ->route('admin.student.index')
        ->with('success', 'Data siswa berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}