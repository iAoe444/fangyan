@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/about_us.css') }}">
@stop

@section('title')
关于我们
@stop

@section('tag')
'about_us'
@stop

@section('content')
<div class="html">
    <div style="margin-top: 100px">
        <div class="banner_text">
            <div class="left_rect"></div>
            <div class="text">
                <div class="text_ch">关于我们</div>
                <div class="text_en">CONTACT US</div>
            </div>
        </div>
        <div class="contact_area">
            <div class="contact_left">
                <div class="contact">
                    <img src="{{ asset('images/about_us/user.png') }}"> <span>乡音故事机团队</span>
                </div>
                <div class="contact">
                    <img src="{{ asset('images/about_us/email.png') }}"> <span>iswan27@163.com</span>
                </div>
                <div class="contact">
                    <img src="{{ asset('images/about_us/location.png') }}"> <span>广东技术师范大学</span>
                </div>
            </div>
            <div class="contact_right">
                <span>感谢您的留言</span>
                <textarea class="textarea"></textarea>
            </div>
        </div>
    </div>
</div>
@stop