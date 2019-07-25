@extends('common.frontend')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/home_location.css') }}">
@stop

@section('title')
家乡位置
@stop

@section('tag')
'home_location'
@stop

@section('content')
<div class="map">
    <div class="dituContent" id="dituContent"></div>
    <div class="banner_text">
        <h2>欢迎来到顺德</h2>
        <p class="desc">顺德区是佛山市五个行政辖区之一。位于广东省的南部，珠江三角洲平原中部，由江河冲积而成的河口三角洲平原；广佛同城的西南边界、广佛肇经济圈的南部，是佛山市与广州市联系的重要核心区域之一。</p>
    </div>
</div>
<script type="text/javascript"
	src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script type="text/javascript" src="{{ asset('js/map.js') }}"></script>
@stop