<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $table = 'membro';
    protected $fillable = ['id', 'nome', 'cargo', 'idDepartamento'];
    protected $hidden = ['remember_token'];
    public $timestamps = false;


   /* public function add(){
        $member = new Membro;
        
    }*/
}
