<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $primaryKey = 'feedback_id';

    protected $fillable = ['content'];
    
    //存入数据库的时候是时间戳
    public function getDateFormat()
    {
        return time();
    }

    //获取的时候是时间戳
    // public function asDateTime($val){
    //     return $val;
    // }
}
