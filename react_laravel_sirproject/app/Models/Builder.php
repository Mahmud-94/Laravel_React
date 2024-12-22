<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Builder extends Authenticatable
{
    use HasApiTokens, HasFactory;




    protected $fillable = [
        'name',
        'email',
        'password',

    ];


}