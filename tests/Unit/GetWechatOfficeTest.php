<?php

$html = '<div class="qr_code_pc_inner">
<div class="qr_code_pc">
    <img id="js_pc_qr_code_img" class="qr_code_pc_img" src="/mp/qrcode?scene=10000004&amp;size=102&amp;__biz=MzIyMTkzNjAzNQ==&amp;mid=2247483749&amp;idx=1&amp;sn=aaf9818c94896f0272e252ddd36022e2&amp;send_time=">
    <p>微信扫一扫<br>关注该公众号</p>
</div>
</div>';

$p = '|src="/mp/qrcode+(.*?)+">|';

$result = preg_replace_callback(
    '@<img id="js_pc_qr_code_img" class="qr_code_pc_img" src="/mp/qrcode[^\s]*@',
    function ($match) {
        return '<img class="qr_code_pc_img" src="\images\qrcode.png">';
    },
    $html
);

echo $result;