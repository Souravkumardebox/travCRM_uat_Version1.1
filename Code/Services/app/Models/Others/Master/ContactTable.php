<?php

namespace App\Models\Others\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactTable extends Model
{
    use HasFactory;
    protected $table = _CONTACT_TABLE_;
    protected $primarykey = "Contact_id";
    protected $fillable = [
     'Title',  
     'ContactPerson',
     'Designation',
     'CountryCode',
     'Phone1',
     'Phone2',
     'Email1',
     'Email2',
     'created_at',
     'updated_at',
    ];
    public $timestamps = false;
}
