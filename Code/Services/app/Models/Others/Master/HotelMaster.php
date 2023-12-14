<?php

namespace App\Models\Others\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelMaster extends Model
{
    use HasFactory;
    protected $table = _HOTEL_MASTER_;
    protected $primarykey = "id";
    protected $fillable = [
     'HotelName',  
     'HotelCode',
     'HotelCategory',
     'HotelCountry',
     'HotelState',
     'HotelCity',
     'HotelType',
     'HotelPinCode',
     'HotelAddress',
     'HotelLink',
     'HotelLocation',
     'HotelGSTN',
     'HotelWeekend',
     'CheckIn',
     'CheckOut',
     'HotelInfo',
     'HotelPolicy',
     'HotelT&C',
     'HotelAmenties',
     'HotelRoomType',
     'HotelStatus',
     'HotelChain',
     'Contact_id',
     'created_at',
     'updated_at',
    ];
    public $timestamps = false;
}
