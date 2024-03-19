<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Address(){
        return $this->hasMany(Address::class);
    }

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone'
    ];
}
