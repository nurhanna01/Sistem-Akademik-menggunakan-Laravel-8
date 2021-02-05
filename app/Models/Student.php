<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guard = 'student';
    
    protected $fillable = [
        'nim','nama','password','jenis_kelamin','jurusan','angkatan','alamat'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class,'course_student');
    }
}