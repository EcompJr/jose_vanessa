<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';
    protected $fillable = ['idEvento', 'nome', 'data', 'hora', 'local'];
    protected $hidden = ['remember_token'];
    public $timestamps = false;
    //
}
