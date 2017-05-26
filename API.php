<?php

$data = file_get_contents('http://animemap.net/api/table/tokyo.xml');
$array = simplexml_load_string($data);
echo '<table>';
echo '<tr>';
echo '<th>曜日</th>';
echo '<th>状態</th>';
echo '<th>番組名</th>';
echo '<th>次回</th>';
echo '<th>全話数</th>';
echo '<th>放送時間</th>';
echo '<th>放送局</th>';
echo '</tr>';
foreach($array->response->item as $value) {
    if($value->cable > 0) {
        $cable = 'background:#eee;';
    } else {
        $cable = '';
    }
    if($value->today > 0) {
        $today = 'background:#ffeeee;';
    } else {
        $today = '';
    }
    echo '<tr style="' . $today . $cable . '">';
    echo '<td>' . $value->week . '</td>';
    echo '<td>' . ($value->state == 'onair' ? '放送中' : '新規アニメ') . '</td>';
    echo '<td><a href="' . $value->url . '">' . $value->title . '</a></td>';
    echo '<td>' . $value->next . '</td>';
    echo '<td>' . $value->episode . '</td>';
    echo '<td>' . $value->time . '</td>';
    echo '<td>' . $value->station . '</td>';
    echo '</tr>';
}
echo '</table>';
echo '<p><a href="' . $array->request->url . '">番組表元データはアニメマップから取得しています。番組データに誤りがある場合はアニメマップから修正依頼を出すことで修正することができます。</a>最終更新時間は' . date('Y年m月d日H時i分s秒', strtotime($array->request->updated)) . 'です。ピンクの行は本日の放送されるアニメ。灰色の行はケーブルテレビなどの特殊な条件下で受信することができます。</p>';
