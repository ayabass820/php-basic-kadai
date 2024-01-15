<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $score_total = 80 + 60 + 55 + 40 + 100 + 25 + 80 + 95 + 30 + 60;
    $score_average = $score_total / 10;
    echo $score_average;
    ?>
  </p>

</body>
</html>