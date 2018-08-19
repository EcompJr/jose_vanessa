<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administrador';
  //  protected $primaryKey = 'idAdministrador';
    protected $fillable = ['email', 'password'];
   // protected $hidden = ['remember_token'];
    public $timestamps = false;
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
