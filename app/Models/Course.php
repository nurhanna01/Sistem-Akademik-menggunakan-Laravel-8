<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'kode_mk','nama_mk','jumlah_sks','lecture_id'
    ];

    public function students()
    {
    	return $this->belongsToMany(Student::class,'course_student');
    }

    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }

}
