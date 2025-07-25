<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;
    public function user()
{
    return $this->belongsTo(User::class);
}

public function car()
{
    return $this->belongsTo(Car::class);
}
}