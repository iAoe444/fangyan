<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LifeScene;

class LifeSceneController extends Controller
{
    public function create(Request $request)
    {
        if ($request->method() == 'GET') {
            return view('manage.scene.create');
        } else if ($request->method() == 'POST') {

            // 控制器验证数据
            $this->validate($request, [
                'title' => 'required',
                'img' => 'required|image',
                'video' => 'required'
            ], [
                'required' => ':attribute为必填项'
            ], [
                'title' => '标题',
                'img' => '图片',
                'video' => '描述'
            ]);
            $title = $request->input('title');
            $img = $request->file('img');
            $video = $request->file('video');

            // 取个新的图片名字
            $newImgName = time() . "." . $img->extension();
            // 取个新的文件名字
            $newVideoName = time() . "." . $video->extension();
            // 移动图片
            $img->move("images/scene", $newImgName);
            // 移动视频
            $video->move("video/scene", $newVideoName);
            // 往数据库里面保存
            $scene = LifeScene::create(
                ['title' => $title, 'img_url' => 'images/scene/' . $newImgName, 'video_url' => 'video/scene/' . $newVideoName]
            );
            return redirect('manage/scene')->with('success', '添加成功-' . $scene->scene_id);
        } else {
            echo '错误的请求方法';
        }
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $scene = LifeScene::find($id);
        \unlink($scene->img_url);
        \unlink($scene->video_url);
        if ($scene->delete()) {
            return redirect('manage/scene')->with('success', '删除成功-' . $id);
        } else {
            return redirect('manage/scene')->with('success', '删除失败-' . $id);
        }
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $scene = LifeScene::find($id);
        if ($request->method() == 'GET') {
            // 如果存在场景
            if ($scene) {
                return view('manage.scene.update')->with('scene', $scene);
            } else {
                return redirect('index');
            }
        } else if ($request->isMethod('POST')) {
            // 如果存在场景
            if ($scene) {
                $title = $request->input('title');
                $img = $request->file('img');
                $video = $request->file('video');

                // 控制器验证数据
                $this->validate($request, [
                    'title' => 'required',
                    'img' => 'image',
                ], [
                    'required' => ':attribute为必填项',
                    'image' => '上传的:attribute必须为图片'
                ], [
                    'title' => '标题',
                    'image' => '图片'
                ]);
                // 往数据库里面更新数据
                $scene->title = $title;
                // 如果上传了图片，那么更新图片
                if ($img) {
                    // 取个新的图片名字
                    $newName = time() . "." . $img->extension();
                    // 移动图片
                    $img->move("images/scene", $newName);
                    \unlink($scene->img_url);
                    $scene->img_url = 'images/scene/' . $newName;
                }
                // 如果上传了视频，那么更新视频
                if ($video) {
                    // 取个新的图片名字
                    $newName = time() . "." . $video->extension();
                    // 移动图片
                    $video->move("video/scene", $newName);
                    \unlink($scene->video_url);
                    $scene->video_url = 'video/scene/' . $newName;
                }
                if ($scene->save()) {
                    return redirect('manage/scene')->with('success', '更新成功-' . $scene->scene_id);
                } else {
                    return redirect('manage/scene')->with('success', '更新失败-' . $scene->scene_id);
                }
            } else {
                return redirect('index');
            }
        }
    }
}
