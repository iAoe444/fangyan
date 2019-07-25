@extends('common.manage')

@section('content')
<!-- 自定义内容区域 -->
<div class="row">
    <!-- 右侧内容区域 -->
    <div class="col-md-9">
        @include('common.validate')

        <!-- 自定义内容区域 -->
        <div class="panel panel-default">
            <div class="panel-heading">新增场景</div>
            @include('manage.scene.form')
        </div>

    </div>
</div>
@stop