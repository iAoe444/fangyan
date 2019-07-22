@extends('layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/index.css') }}">
@stop

@section('title')
    首页
@stop

@section('content')
<img class="img-responsive show-img" src="{{ asset('images/index.png') }}"/>
@stop