@extends('common.manage')

@section('css')
<style text="">
    .video_area {
        position: absolute;
        top: 0;
    }

    .video_close {
        position: relative;
        top: -450px;
        left: 850px;
    }
</style>
@stop

@section('content')

@include('common.message')
<!-- 自定义内容区域 -->
<div class="panel panel-default">
    <div class="panel-heading" style="postion:relative">场景列表<a href="{{ url('/manage/scene/create') }}" style="float:right">新增</a></div>
    <table class="table table-striped table-hover table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>标题</th>
                <th>配图</th>
                <th>视频</th>
                <th>创建时间</th>
                <th>修改时间</th>
                <th width="120">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($scenes as $scene)
            <tr>
                <th scope="row">{{ $scene->scene_id }}</th>
                <td>{{ $scene->title }}</td>
                <td><a href="{{ asset($scene->img_url) }}"><img src="{{ asset($scene->img_url) }}" style="width:30px" /></a></td>
                <td><a id="{{ asset($scene->video_url) }}" onclick=bofang(this.id)>查看</a></td>
                <td>{{ $scene->created_at }}</td>
                <td>{{ $scene->updated_at }}</td>
                <td>
                    <a href="{{ url('manage/scene/update?id=') }}{{ $scene->scene_id }}">修改</a>
                    <a href="{{ url('manage/scene/delete?id=') }}{{ $scene->scene_id }}" onclick="if (!confirm('确定要删除吗？')) return false;">删除</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div id="video_area" style="display: none" class="video_area">
    <img src="{{ asset('images/close.png') }}" style="height: 30px;" class="video_close" onclick="zanting()">
    <video id="video" width="800px">
        <source id="source" type="video/mp4" />
        你的浏览器暂不支持播放该视频，请换个浏览器试试
    </video>
</div>

<!-- 分页  -->
<div>
    <div calss="pull-right">
        {{ $scenes->render() }}
    </div>
</div>
@stop

@section('javascript')
<script type="text/javascript">
    var video = document.getElementById("video");
    var video_area = document.getElementById("video_area");
    var scene_area = document.getElementById("scene_area");
    var source = document.getElementById("source");

    function zanting() {
        video.pause();
        video_area.style.display = "none";
    }

    function bofang(id) {
        video.src = id;
        video.currentTime = 0;
        video.play();
        video_area.style.display = "block";
    }
</script>
@stop