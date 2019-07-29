@extends('common.manage')

@section('content')

@include('common.message')
<!-- 自定义内容区域 -->
<div class="panel panel-default">
    <div class="panel-heading" style="postion:relative">方言文化列表<a href="{{ url('/manage/article/create') }}" style="float:right">新增</a></div>
    <table class="table table-striped table-hover table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>图片</th>
                <th>标题</th>
                <th>描述</th>
                <th>地址</th>
                <th>创建时间</th>
                <th width="120">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{ $article->article_id }}</th>
                <td><a href="{{ asset($article->img_url) }}"><img src="{{ asset($article->img_url) }}" style="width:30px" /></a></td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->desc }}</td>
                <td><a href="{{ url('dialectculture/article?wxUrl=') }}{{ $article->url }}">查看</a></td>
                <td>{{ $article->created_at }}</td>
                <td>
                    <a href="{{ url('manage/article/update?id=') }}{{ $article->article_id }}">修改</a>
                    <a href="{{ url('manage/article/delete?id=') }}{{ $article->article_id }}" onclick="if (!confirm('确定要删除吗？')) return false;">删除</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- 分页  -->
<div>
    <div class="pull-right">
        {{ $articles->render() }}
    </div>
</div>
@stop