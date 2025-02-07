<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['destination', 'price', 'departure'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'destination_users');
    }
}
