<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <title>乡音故事机-后台管理系统</title>
    <!-- Bootstrap CSS 文件 -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    @yield('css')
</head>
<body>

<!-- 头部 -->
@section('header')
<div class="jumbotron">
    <div class="container">
        <h2>乡音故事机</h2>
        <p> - 后台管理</p>
    </div>
</div>
@show

<!-- 中间内容区局 -->
<div class="container">
    <div class="row">

        <!-- 左侧菜单区域   -->
        <div class="col-md-3">
            @section('left-menu')
            <div class="list-group">
                <a href="{{ url('manage/article') }}" class="list-group-item {{ strstr(Request::getPathInfo(),'/manage/article')?'active':'' }}">文章列表</a>
                <a href="{{ url('manage/scene') }}" class="list-group-item {{ strstr(Request::getPathInfo(),'/manage/scene')?'active':'' }}">场景列表</a>
                <a href="{{ url('manage/feedback') }}" class="list-group-item {{ strstr(Request::getPathInfo(),'/manage/feedback')?'active':'' }}">留言列表</a>
            </div>
            @show
        </div>

        <!-- 右侧内容区域 -->
        <div class="col-md-9">

            @section('content')

            @show

        </div>
    </div>
</div>

<!-- 尾部 -->
@section('footer')
<div class="jumbotron" style="margin:0;">
    <div class="container">
        <span>  @2019 fanyan</span>
    </div>
</div>
@show

@section('javascript')

@show

</body>
</html>