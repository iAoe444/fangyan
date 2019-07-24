@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/life_scene.css') }}">
@stop

@section('title')
生活场景
@stop

@section('tag')
'life_scene'
@stop

@section('content')
<div class="html">
    <div class="title_text">
        <span class="title_en">DAILY LIFE</span> <span class="title_ch">日常情境</span>
    </div>
    <div class="scene_area" id="scene_area">
        @foreach($scenes as $scene)
        <div id="{{ asset($scene->video_url) }}" class="scene" onclick="bofang(this.id)">
            <img alt="{{ $scene->title }}" src="{{ asset($scene->img_url) }}">
            <div class="mask">{{ $scene->title }}</div>
        </div>
        @endforeach
    </div>
    <div id="video_area" style="display: none;" class="video_area">
        <img src="{{ asset('images/close.png') }}" style="height: 30px;" class="close" onclick="zanting()">
        <video id="video" width="800px">
            <source id="source" type="video/mp4" />
            你的浏览器暂不支持播放该视频，请换个浏览器试试
        </video>
    </div>
</div>
<script type="text/javascript">
    var video = document.getElementById("video");
    var video_area = document.getElementById("video_area");
    var scene_area = document.getElementById("scene_area");
    var source = document.getElementById("source");

    function zanting() {
        video.pause();
        video_area.style.display = "none";
        scene_area.style.display = "flex";
    }

    function bofang(id) {
        video.src = id;
        video.currentTime = 0;
        video.play();
        scene_area.style.display = "none";
        video_area.style.display = "block";
    }
</script>
@stop