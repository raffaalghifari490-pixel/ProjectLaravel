<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use function Laravel\Prompts\table;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 100);
            $table->integer('nis');
            // $table->string('classroom', length: 20);
            // merelasikan tabel classroom dengan tabel student
            // memanggil  id dari tabel classroom
            // mengubah kolom classroom dari string ke foreign key (classroom_id)
            $table->foreignId('classroom_id')->constrained(table: 'classrooms', indexName: 'classrooms_student_id');
            $table->string('address');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};