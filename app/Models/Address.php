<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function Contact(){
        return $this->belongsTo(Contact::class);
    }

    protected $fillable = [
        'street', 'city', 'province', 'country', 'postal_code'
    ];
}
