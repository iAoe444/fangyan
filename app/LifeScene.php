<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LifeScene extends Model
{
    protected $table = 'life_scene';
    protected $primaryKey = 'scene_id';
    
    protected $fillable = ['video_url','title','img_url'];

    public $timestamps = true;

    public function getDateFormat()
    {
        return time();
    }
}
