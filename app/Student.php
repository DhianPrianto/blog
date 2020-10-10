<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //yang boleh diisi didata base
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
    
    //yang tidak boleh diisi didata base
    //protected $guarded = ['nama', 'nrp', 'email', 'jurusan'];

}
