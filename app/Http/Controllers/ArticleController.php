<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function addArticle(){
        Article::create(
            ['title'=>'乡音故事机','url'=>'https://mp.weixin.qq.com/s/N-q25yqxSLlxDpBq1NNWuw','desc'=>'来自公众号（乡音故事机）']
        );
    }
}
