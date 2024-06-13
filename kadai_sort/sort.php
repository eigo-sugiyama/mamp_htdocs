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
              echo "昇順にソートします。<br>";
          } else {
              rsort($array); // 降順ソート
              echo "降順にソートします。<br>";
          }
          
          foreach ($array as $num) {
              echo $num . "<br>";
          }
          
          return $array;
        }
        
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];
        
        // 昇順にソート
        sort_2way($nums, true);
        
        // 降順にソート
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>
