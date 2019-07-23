@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/index.css') }}">
@stop

@section('title')
中国经典童话 | 丁丁回家去（一）
@stop

@section('tag')
'dialect_culture'
@stop

@section('content')
<iframe id="iframe" src="{{ url('dialectculture/wxarticle?wxUrl=') }}{{ $wxUrl }}" frameborder="0" marginwidth="0" width="100%" scrolling="no"></iframe>
<script type="text/javascript">
    //设置文章的高度
    var frame = document.getElementById('iframe')
    window.addEventListener('message', function(e) {
        frame.style.height = e.data.height + 'px'
    })
</script>
@stop