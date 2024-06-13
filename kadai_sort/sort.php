<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数
        function sort_2way($array, $order) {
          if ($order) {
              sort($array); // 昇順ソート
          } else {
              rsort($array); // 降順ソート
          }
          return $array;
        }
        
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];
        
        // 昇順にソート
        $sortedAsc = sort_2way($nums, true);
        
        // 降順にソート
        $sortedDesc = sort_2way($nums, false);
        
        // ページ上に表示
        echo "昇順にソートします。<br>";
        foreach ($sortedAsc as $num) {
          echo $num . "<br>";
        }
        
        echo "降順にソートします。<br>";
        foreach ($sortedDesc as $num) {
          echo $num . "<br>";
        }
        ?>
    </p>
</body>

</html>
