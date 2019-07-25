@extends('common.manage')

@section('content')

@include('common.message')
<!-- 自定义内容区域 -->
<div class="panel panel-default">
    <div class="panel-heading" style="postion:relative">留言列表</div>
    <table class="table table-striped table-hover table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>留言内容</th>
                <th>留言时间</th>
                <th width="120">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedbacks as $feedback)
            <tr>
                <th scope="row">{{ $feedback->feedback_id }}</th>
                <td>{{ $feedback->content }}</td>
                <td>{{ $feedback->updated_at }}</td>
                <td>
                    <a href="{{ url('manage/feedback/delete?id=') }}{{ $feedback->feedback_id }}" onclick="if (!confirm('确定要删除吗？')) return false;">删除</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- 分页  -->
<div>
    <div class="pull-right">
        {{ $feedbacks->render() }}
    </div>
</div>
@stop