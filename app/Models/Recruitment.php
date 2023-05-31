<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'start_time',
        'end_time',
        'date'
    ];
    
    public function RecruitmentUser()
    {
        return $this->hasMany('App\RecruitmentUser'); //recruitmentがたくさんのrecruitmentuserをもつ
    }
}
