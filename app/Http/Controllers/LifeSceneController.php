<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LifeScene;

class LifeSceneController extends Controller
{
    public function addScene(){
        LifeScene::create(
            ['title'=>'当你陪伴孩子时','img_url'=>'test','video_url'=>'test']
        );
    }
}
