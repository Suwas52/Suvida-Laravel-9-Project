<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestRide extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function userId(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function bikeId(){
        return $this->belongsTo(VehicleModel::class,'bike_id');
    }

}