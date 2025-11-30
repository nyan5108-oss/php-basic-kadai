<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 独自のソート関数を作成
        function sort_2way($array, $order = true) {
            if ($order) {
                // 昇順ソート
                sort($array); // sortはキーを維持せずに値だけを昇順に並べ替える
                echo "昇順ソート結果：<br>";
            } else {
                // 降順ソート
                rsort($array); // rsortはキーを維持せずに値だけを降順に並べ替える
                echo "降順ソート結果：<br>";
            }

            // ソート後の配列を1行ずつ出力
            foreach ($array as $value) {
                echo $value . '<br>';
            }
            echo '<br>'; // 見やすくするために改行
        }

        // ソート対象の配列を用意
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソートを実行
        sort_2way($nums, true);

        // 降順ソートを実行
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>