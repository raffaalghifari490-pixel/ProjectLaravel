<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectsFactory> */
    use HasFactory;
    protected $table = 'subjects';
    protected $fillable = 
    [
        'name'
    ] ;

    public function teachers()
    {
        return $this->hasOne(Teachers::class, 'subject_id');
    }
}