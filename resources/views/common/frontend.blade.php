<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <!-- 设置移动端滚动 -->
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>乡音故事机 - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/banner.css') }}">
    @yield('css')
</head>

<body background="{{ asset('images/background.png') }}">
    <div class="banner" id="banner">
        <a href="{{ url('manage') }}"><img class="logo" src="{{ asset('images/logo.png') }}"></a>
        <a id="index" href="{{ url('index') }}">回到首页</a>
        <a id="home_location" href="{{ url('homelocation') }}">家乡位置</a>
        <a id="life_scene" href="{{ url('lifescene') }}">生活场景</a>
        <a id="dialect_culture" href="{{ url('dialectculture') }}">方言文化</a>
        <a id="dialect_test" href="{{ url('dialecttest') }}">方言测试</a>
        <a id="about_us" href="{{ url('aboutus') }}">关于我们</a>
    </div>

    @yield('content','我是父模板的主要内容区域')

    <script type="text/javascript">
        var tagName = @yield('tag');
        $("#"+tagName).css('background','#d1a8d9');
    </script>

</body>