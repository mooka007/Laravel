<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;
    // protected $fillable= ['name'];
    public function city()
    {
        return $this->belongsTo(City::class); // return of the belongs returns Object
    }
    public function user()
    {
        return $this->belongsTo(User::class); // return of the belongs returns Object
    }


}
