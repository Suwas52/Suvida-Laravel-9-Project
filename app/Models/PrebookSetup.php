<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrebookSetup extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function vehicle(){
        return $this->belongsTo(Vehicle::class,'vehicle_id','id');
    }

    public function model(){
        return $this->belongsTo(VehicleModel::class,'model_id','id');
    }
}