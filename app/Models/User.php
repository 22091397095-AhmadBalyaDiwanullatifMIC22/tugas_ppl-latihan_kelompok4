<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Notifications\Notifiable;


class User extends AuthenticatableUser implements Authenticatable
{
    use HasFactory, Notifiable;

    public function Contact(){
        return $this->hasMany(Contact::class);
    }

    protected $fillable = [
        'username', 'password', 'name',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
