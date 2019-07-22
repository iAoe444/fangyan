<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <!-- 设置移动端滚动 -->
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>乡音故事机 - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/banner.css') }}">
    @yield('css')
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="banner col-xs-12 col-sm-12">
        <img class="logo img-responsive" src="{{ asset('images/logo.png') }}">
        <a id="index" href="{{ url('index') }}">回到首页</a>
        <a id="home_location" href="/fanYan/home_location">家乡位置</a>
        <a id="life_scene" href="/fanYan/life_scene">生活场景</a>
        <a id="dialect_culture" href="{{ url('dialectculture') }}">方言文化</a>
        <a id="dialect_test" href="/fanYan/dialect_test">方言测试</a>
        <a id="about_us" href="/fanYan/about_us">关于我们</a>
    </div>
    
    @yield('content','我是父模板的主要内容区域')

    <script type="text/javascript">
        var url = window.location.pathname;
        var tag_name = url.substring(url.lastIndexOf('/') + 1, url.length);
        var tag = document.getElementById(tag_name);
        tag.style.backgroundColor = "#6f7381";
    </script>

</body>