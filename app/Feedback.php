<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $primayKey = 'feedback_id';

    protected $fillable = ['content'];
    
    public function getDateFormat()
    {
        return time();
    }
}
