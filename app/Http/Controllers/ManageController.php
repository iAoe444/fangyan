<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\LifeScene;
use App\Article;

class ManageController extends Controller
{
    public function index()
    {
        return redirect('/manage/article');
    }

    public function article()
    {
        $articles = Article::paginate(10);
        return view('manage.article')->with('articles',$articles);
    }

    public function scene()
    {
        // 分页，每页是10个记录
        $scenes = LifeScene::paginate(10);
        return view('manage.scene')->with('scenes',$scenes);
    }

    public function feedback()
    {
        // 分页，每页是10个记录
        $feedbacks = Feedback::orderBy('created_at', 'desc')->paginate(10);
        return view('manage.feedback')->with('feedbacks',$feedbacks);
    }
}
