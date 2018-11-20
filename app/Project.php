<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Variables I don't accept for assignment
    //----------------------------------------
    // protected $guarded = []


    // ^^^ same as below

    // Variables I accept for assignment
    //----------------------------------
    protected $fillable = ['title', 'description'];

}
