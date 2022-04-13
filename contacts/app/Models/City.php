<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    // protected $fillable= ['id','name','email', 'phone', 'city'];
    public function friends()
    {
        return $this->hasMany(Friend::class); // return hasMany is a table
    }
}


/// Foreign key cities and friend and user