<?php

namespace App\Models\Others\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadSourceMaster extends Model
{
    use HasFactory;
    protected $table = _Lead_Source_Master_;
    protected $primarykey = "id";
    protected $fillable = [
     'Name',
     'SetDefault',
     'Status',
     'AddedBy',
     'UpdatedBy',
     'created_at',
     'updated_at',
     
    ];
}
