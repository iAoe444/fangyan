<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\LifeScene;

class FrontEndController extends Controller
{
    public function welcome()
    {
        return redirect('/index');
    }

    public function index()
    {
        return view('frontend.index');
    }

    //方言文化，这里需要传参
    public function dialectculture()
    {
        //查询所有的文章
        $articles = Article::orderBy('updated_at', 'desc')->get();
        return view('frontend.dialectculture', ['articles' => $articles]);
    }

    public function homelocation()
    {
        return view('frontend.homelocation');
    }

    //生活场景
    public function lifescene()
    {
        $scenes = LifeScene::all();
        return view('frontend.lifescene')->with('scenes', $scenes);
    }

    public function dialecttest()
    {
        return view('frontend.dialecttest');
    }

    public function aboutus()
    {
        return view('frontend.aboutus');
    }

    public function article(Request $request)
    {
        // 获取微信文章的url，然后把url放在iframe里面
        if ($request->has('wxUrl')) {
            $wxUrl = $request->input('wxUrl');
            return view('frontend.article', ['wxUrl' => $wxUrl]);
        }
    }

    // 方言文化-视频
    public function video(Request $request)
    {
        // id
        if ($request->has('id')) {
            $id = $request->input('id');
            $video = Article::find($id);
            return view('frontend.video', ['video' => $video]);
        }
    }

    //获取公众号文章
    public function wxarticle(Request $request)
    {
        if ($request->has('wxUrl')) {
            $wxUrl = $request->input('wxUrl');
            $html = file_get_contents($wxUrl);
            $html = str_replace("data-src", 'src', $html);
            //由于微信公众号的图片不能跨域，要转化下
            $html = preg_replace_callback(
                '@http[s]?://mmbiz.qpic.cn[^\s]*@',
                function ($match) {
                    return "image?redirectUrl=" . $match[0];
                },
                $html
            );

            //用来获取高度传递给iframe的
            $appendMsg = "
            <iframe id=\"c_iframe\"  height=\"0\" width=\"0\"  src=\"http://lab.iaoe.xyz/fanyan/public/agent.html\" style=\"display:none\" ></iframe>
                <script type=\"text/javascript\">
                (function autoHeight(){
                var b_width = Math.max(document.body.scrollWidth,document.body.clientWidth);
                var b_height = Math.max(document.body.scrollHeight,document.body.clientHeight);
                var c_iframe = document.getElementById(\"c_iframe\");
                c_iframe.src = c_iframe.src + \"#\" + b_width + \"|\" + b_height;  // 这里通过hash传递b.htm的宽高
                })();
            </script>";
            $html = $html . $appendMsg;

            header('content-Type: text/html;charset=utf-8');
            header('HTTP/1.1 200 Ok');
            echo $html;
        }
    }

    //获取公众号图片
    public function image()
    {
        $redirectUrl = urldecode($_GET["redirectUrl"]);
        if (!empty($redirectUrl)) {
            header("Content-Type: image/jpeg;text/html;charset=utf-8");
            echo file_get_contents($redirectUrl);
        }
    }
}
