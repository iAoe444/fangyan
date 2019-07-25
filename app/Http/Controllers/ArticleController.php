<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function create(Request $request)
    {
        if ($request->method() == 'GET') {
            return view('manage.article.create');
        } else if ($request->method() == 'POST') {

            // 控制器验证数据
            $this->validate($request, [
                'title' => 'required',
                'img' => 'required|image',
                'desc' => 'required',
                'url' => 'required',
            ], [
                'required' => ':attribute为必填项',
                'image' => '上传的:attribute必须为图片'
            ], [
                'title' => '文章标题',
                'img' => '图片',
                'desc' => '描述',
                'url' => '文章链接',
            ]);
            $title = $request->input('title');
            $img = $request->file('img');
            $desc = $request->input('desc');
            $url = $request->input('url');

            // 取个新的图片名字
            $newName = time() . "." . $img->extension();
            // 移动图片
            $img->move("images/article", $newName);
            // 往数据库里面保存
            $article = Article::create(
                ['title' => $title, 'img_url' => 'images/article/' . $newName, 'desc' => $desc, 'url' => $url]
            );
            return redirect('manage/article')->with('success', '添加成功-' . $article->article_id);
        } else {
            echo '错误的请求方法';
        }
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $article = Article::find($id);
        \unlink($article->img_url);
        if ($article->delete()) {
            return redirect('manage/article')->with('success', '删除成功-' . $id);
        } else {
            return redirect('manage/article')->with('success', '删除失败-' . $id);
        }
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $article = Article::find($id);
        if ($request->method() == 'GET') {
            // 如果存在文章
            if ($article) {
                return view('manage.article.update')->with('article', $article);
            } else {
                return redirect('index');
            }
        } else if ($request->isMethod('POST')) {
            // 如果存在文章
            if ($article) {
                $title = $request->input('title');
                $img = $request->file('img');
                $desc = $request->input('desc');
                $url = $request->input('url');

                // 控制器验证数据
                $this->validate($request, [
                    'title' => 'required',
                    'desc' => 'required',
                    'url' => 'required',
                    'img' => 'image',
                ], [
                    'required' => ':attribute为必填项',
                    'image' => '上传的:attribute必须为图片'
                ], [
                    'title' => '文章标题',
                    'desc' => '描述',
                    'url' => '文章链接',
                ]);
                // 往数据库里面更新数据
                $article->title = $title;
                $article->url = $url;
                $article->desc = $desc;
                // 假设上传了图片，那么添加图片
                if ($img) {
                    // 取个新的图片名字
                    $newName = time() . "." . $img->extension();
                    // 移动图片
                    $img->move("images/article", $newName);
                    \unlink($article->img_url);
                    $article->img_url = 'images/article/' . $newName;
                }
                if ($article->save()) {
                    return redirect('manage/article')->with('success', '更新成功-' . $article->article_id);
                } else {
                    return redirect('manage/article')->with('success', '更新失败-' . $article->article_id);
                }

            } else {
                return redirect('index');
            }
        }
    }
}
