<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $table = 'studentss';

   protected $fillable = ['nama','nisn','email','jurusan'];


}
