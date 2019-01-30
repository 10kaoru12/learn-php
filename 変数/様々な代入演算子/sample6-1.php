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
    $num = 40;
    print '$num = ' . $num . '<br />';

    $num += 25;
    print '$num = ' . $num . '<br />';

    $str = '福岡';
    print '$str = ' . $str . '<br />';

    $str .= '支店';
    print '$str = ' . $str;
    ?>
</p>

</body>
</html>