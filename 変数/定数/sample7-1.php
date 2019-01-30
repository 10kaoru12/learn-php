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
    define("PAI", 3.14159);

    $r = 7;
    $menseki = PAI * $r * $r;
    print '半径=' . $r . 'の面積は' . $menseki . '<br />';

    $r = 14;
    $menseki = PAI * $r * $r;
    print '半径=' . $r . 'の面積は' . $menseki;
    ?>
</p>

</body>
</html>