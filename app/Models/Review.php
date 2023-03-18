<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function rating(){
        return $this->belongsTo(Rating::class, 'user_id','user_id');
    }

    public function model(){
        return $this->belongsTo(VehicleModel::class, 'model_id','id');
    }
}