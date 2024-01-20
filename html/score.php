<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 変数を作成し、値を代入
        $scores1 =80;
        $scores2 =60;
        $scores3 =55;
        $scores4 =40;
        $scores5 =100;
        $scores6 =25;
        $scores7 =80;
        $scores8 =95;
        $scores9 =30;
        $scores10 =60;

        $scores_total =$scores1 + $scores2 + $scores3 + $scores4 + $scores5 + $scores6 + $scores7 + $scores8 + $scores9 +$scores10;

        $scores_average = $scores_total / 10;

        echo $scores_average
        ?>
    </p>
</body>