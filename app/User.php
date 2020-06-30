<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'rol' => 'required|exists:rols,rol_id'
    ];

    public static $messages = [
        'name.required' => 'Debe ingresar el nombre del usuario',
        'email.required' => 'Debe ingresar el email del usuario',
        'email.unique' => 'El email ingresado ya se encuentra registrado',
        'email.email' => 'El correo ingresado no cumple con el formato de un email',
        'password.required' => 'Debe ingresar la contraseña del usuario',
        'password.min' => 'La contraseña del usuario debe poseer al menos 8 caracteres',
        'rol.required' => 'Es necesario asignarle un rol al usuario',
        'rol.exists' => 'El rol seleccionado no existe'
    ];
}
