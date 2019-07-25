<div class="panel-body">
    <form class="form-horizontal" method="post" action="{{ isset($scene->scene_id) ? url('manage/scene/update?id='.$scene->scene_id) : url('manage/scene/create') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">标题</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="title" placeholder="请输入场景标题" value="{{ isset($scene->title) ? $scene->title : '' }}">
            </div>
        </div>
        <div class="form-group">
            <label for="img" class="col-sm-2 control-label">图片</label>
            <div class="col-sm-5">
                <input type="file" name="img"/>
            </div>
        </div>
        <div class="form-group">
            <label for="video" class="col-sm-2 control-label">视频</label>
            <div class="col-sm-5">
                <input type="file" name="video"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </div>
    </form>
</div>