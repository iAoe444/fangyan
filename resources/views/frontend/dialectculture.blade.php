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
<div class="html">
    <h1 class="h_title">方言文化</h1>
    <div class="item_area">
        <ul class="card_area">
            @foreach($articles as $article)
            <li class="card">
                <a href="{{ url('dialectculture/article?wxUrl=') }}{{ $article->url }}">
                    <img src="{{ asset($article->img_url) }}" class="image">
                    <div class="info">
                        <div class="title">{{ $article->title }}</div>
                        <div class="desc">{{ $article->desc }}</div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@stop