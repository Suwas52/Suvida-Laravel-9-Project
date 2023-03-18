<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','bike_id'];
    public function rUser(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function rBike(){
        return $this->belongsTo(VehicleModel::class,'bike_id');
    }
}
