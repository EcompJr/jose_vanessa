<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administrador';
    protected $fillable = ['id', 'email', 'password'];
    protected $hidden = ['remember_token'];
    public $timestamps = false;
    //
}
