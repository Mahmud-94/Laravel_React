<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'property_id',

        'agent_id',
        'date',

    ];

    public function property(){
        return $this->belongsTo(Property::class);
    }

    public function agent(){
        return $this->belongsTo(Agent::class);
    }
}
