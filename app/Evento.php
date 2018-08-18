<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';
    protected $fillable = ['id', 'data', 'nome', 'local'];
    protected $hidden = ['remember_token'];
    public $timestamps = false;
    //
}
