@extends('common.frontend')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/index.css') }}">
@stop

@section('title')
首页
@stop

@section('tag')
'index'
@stop

@section('content')
<div id="zoomImage" class="zoomImage" style="background-image:url({{ asset('images/index.png') }})"></div>
<script type="text/javascript" src="{{ asset('js/zoomImage.js') }}"></script>
@stop