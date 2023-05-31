<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferUser extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'start_time',
        'end_time',
        'date'
    ];
    
    public function Offer()
    {
        return $this->belongsToMany('App\Offer'); //OfferUser1つにつきoffer1つ
    }
}
