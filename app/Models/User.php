<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    protected $table = 'usuario';   
    protected $primaryKey = 'id_usuario';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'apodo',      
        'telefono',   
        'email',
        'password',
        'direccion',  
    ];

}