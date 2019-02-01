<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>PHPテスト</title>
</head>
<body>

<p>PHPのテストです。</p>

<p>
    <?php
    $count1 = 0;
    $sum = 0;

    while ($count1 < 10) {
        $count1 += 1;

        $count2 = 0;
        while ($count2 < 10) {
            $count2 += 1;
            if ($count1 * $count2 > 30) {
                continue 2;
            }
            $sum += $count1 * $count2;
        }
    }
    print "sum=" . $sum;
    ?>
</p>

</body>
</html>