<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitmentUser extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'start_time',
        'end_time',
        'date'
    ];
    
    public function Recruitment()
    {
        return $this->belongsToMany('App\Recruitment'); //RecruitmentUser1つにつきRecruitment1つ
    }
}
