<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id_account';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'role_id'
    ];

    protected $hidden = [
        'password',
    ];
}
