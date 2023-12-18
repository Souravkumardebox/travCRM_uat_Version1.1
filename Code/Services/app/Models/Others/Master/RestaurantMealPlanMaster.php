<?php

namespace App\Models\Others\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantMealPlanMaster extends Model
{
    use HasFactory;
    protected $table = _RESTAURANT_MEAL_PLAN_MASTER_;
    protected $primarykey = 'id'; 
    protected $fillable = [
        'Name',
        'AddedBy',
        'UpdatedBy',
        'Status',
        'created_at',
        'updated_at',
       
       
    ];
    public $timestamps = false;
}
