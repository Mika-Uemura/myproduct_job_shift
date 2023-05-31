<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'start_time',
        'end_time',
        'date'
    ];
    
    public function OfferUser()
    {
        return $this->hasMany('App\OfferUser'); //offerがたくさんのofferuserをもつ
    }
}
