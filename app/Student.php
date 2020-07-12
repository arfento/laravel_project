<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //dibutuhkan fillable jika memakai cara 2 di controller
    // guarded = data dalam array tidak boleh diisi, kalau fillable sebaliknya
    //dan juga berrfungso unt mencegah malicous user mengirim http parameter data
    protected $fillable = ['nama','nrp','email','jurusan'];
}
