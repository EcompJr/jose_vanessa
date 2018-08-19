<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdministradorAuth extends Authenticatable
{
    use Notifiable;
   

  public function getAuthPassword(){
      return $this->password;
  }
  protected $fillable = [
      'email', 'password',
  ];

  protected $hidden = ['password','remember_token'];

  public $timestamps = false;


}