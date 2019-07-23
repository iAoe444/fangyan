@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/index.css') }}">
@stop

@section('title')
方言测试
@stop

@section('tag')
'dialect_test'
@stop

@section('content')
<div id="zoomImage" class="zoomImage" style="background-image:url({{ asset('images/dialect_test.png') }})"></div>
<script type="text/javascript" src="{{ asset('js/zoomImage.js') }}"></script>
@stop