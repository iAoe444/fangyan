@extends('common.manage')

@section('content')
<!-- 自定义内容区域 -->
<div class="row">
    <!-- 右侧内容区域 -->
    <div class="col-md-9">
        @include('common.validate')

        <!-- 自定义内容区域 -->
        <div class="panel panel-default">
            <div class="panel-heading">更新文章</div>
            @include('manage.article.form')
        </div>

    </div>
</div>
@stop