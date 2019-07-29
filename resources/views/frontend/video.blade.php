@extends('common.frontend')

@section('css')
<style type="text/css">
    body{
        background:white;
    }
    .video_area {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 40px;
    }
    .info {
        width: 60%;
    }

    .video {
        width: 60%;
        margin-top: 11px;
    }

    .title {
        font-size: 18px;
    }

    .desc {
        font-size: 12px;
        color: #999;
        margin-top: 11px;
    }
</style>
@stop

@section('title')
{{ $video->title }}
@stop

@section('tag')
'dialect_culture'@stop

@section('content')
<div class="video_area">
    <div class="info">
        <div class="title">{{ $video->title }}</div>
        <div class="desc">{{ $video->desc }}</div>
    </div>
    <video src="" class="video" controls="controls">
        你的浏览器暂不支持播放该视频，请换个浏览器试试
    </video>
</div>
@stop