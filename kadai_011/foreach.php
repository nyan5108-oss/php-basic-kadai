<?php
// 連想配列を作成
$item = [
    '名前' => '玉ねぎ',
    '値段' => 200,
    '産地' => '北海道'
];

// foreach文でキーと値を出力
foreach ($item as $key => $value) {
    echo $key . '：' . $value . '<br>';
}
?>
