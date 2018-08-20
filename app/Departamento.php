<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';
    protected $fillable = ['nome'];
    protected $hidden = ['remember_token'];
    public $timestamps = false;
    //

   
}
