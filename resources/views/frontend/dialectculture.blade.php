@extends('common.frontend')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/dialect_culture.css') }}">
@stop

@section('title')
方言文化
@stop

@section('tag')
'dialect_culture'@stop

@section('content')
<div class="item_area">
    @foreach($articles as $article)
    <div class="item">
        <a href="{{ url('dialectculture/article?wxUrl=') }}{{ $article->url }}"><img src="{{ asset($article->img_url) }}"> </a>
        <div class="title_text">
            <div>
                <a class="title" href="{{ url('dialectculture/article?wxUrl=') }}{{ $article->url }}">{{ $article->title }}</a>
            </div>
            <div class="desc">{{ $article->desc }}</div>
        </div>
    </div>
    @endforeach
</div>
@stop