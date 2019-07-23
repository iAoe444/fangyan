@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/dialect_culture.css') }}">
@stop

@section('title')
方言文化
@stop

@section('tag')
'dialect_culture'
@stop

@section('content')
<div class="item_area">
    <div class="item">
        <a href="article.jsp?article=1"><img src="images/article.png"> </a>
        <div class="title_text">
            <div>
                <a class="title" href="article1">中国经典童话 | 丁丁回家去（一）</a>
            </div>
            <div class="desc">(来自"乡音故事机"公众号)</div>
        </div>
    </div>
    <div class="item">
        <a href="article.jsp?article=2"><img src="images/article.png"> </a>
        <div class="title_text">
            <div>
                <a class="title" href="article2">中国经典童话 | 丁丁回家去（二）</a>
            </div>
            <div class="desc">(来自"乡音故事机"公众号)</div>
        </div>
    </div>
    <div class="item">
        <a href="article.jsp?article=3"><img src="images/article.png"> </a>
        <div class="title_text">
            <div>
                <a class="title" href="article3">中国经典童话 | 丁丁回家去（三）</a>
            </div>
            <div class="desc">(来自"乡音故事机"公众号)</div>
        </div>
    </div>
</div>
@stop