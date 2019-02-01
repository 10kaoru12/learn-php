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
    $count = 1;
    $sum = 0;

    while ($count <= 100) {
        $sum += $count;

        if ($sum > 1000) {
            print "1000を超えたのでcount=" . $count . "で終了します。<br/>";
            break;
        }
        $count += 1;
    }
    print "sum=" . $sum;
    ?>
</p>

</body>
</html>