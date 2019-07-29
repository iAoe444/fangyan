<div class="panel-body">
    <form class="form-horizontal" method="post" action="{{ isset($article->article_id) ? url('manage/article/update?id='.$article->article_id) : url('manage/article/create') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="url" class="col-sm-2 control-label">网址链接</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="url" placeholder="请输入网址链接" value="{{ isset($article->url) ? $article->url : '' }}">
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">标题</label>

            <div class="col-sm-5">
                <input type="text" class="form-control" name="title" placeholder="请输入标题" value="{{ isset($article->title) ? $article->title : '' }}">
            </div>
        </div>
        <div class="form-group">
            <label for="desc" class="col-sm-2 control-label">描述</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="desc" placeholder="请输入描述" value="{{ isset($article->desc) ? $article->desc : '来自公众号（乡音故事机）' }}">
            </div>
        </div>
        <div class="form-group">
            <label for="img" class="col-sm-2 control-label">图片</label>
            <div class="col-sm-5">
                <input type="file" name="img"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </div>
    </form>
</div>