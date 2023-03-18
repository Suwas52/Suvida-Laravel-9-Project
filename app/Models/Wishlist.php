<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $guarded = []; 

    
    public function model(){
        return $this->belongsTo(VehicleModel::class, 'model_id','id');
    }
    
    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id','id');
    }

    public function vehicle(){
        return $this->belongsTo(Vehicle::class, 'vehicle_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }
}