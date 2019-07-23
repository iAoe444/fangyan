<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'wx_article';
    protected $primaryKey = 'article_id';

    // 指定允许批量赋值的字段
    protected $fillable = ['title', 'desc', 'url'];

    // 自动维护时间戳
    public $timestamps = true;

    // 从数据库获取的是时间戳格式
    public function getDateFormat()
    {
        return time();
    }

    // // 直接使用datatime来显示
    // protected function asDateTime($val)
    // {
    //     return $val;
    // }
}
