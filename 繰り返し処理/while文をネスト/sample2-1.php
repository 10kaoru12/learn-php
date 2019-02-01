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
    $i = 0;

    while ($i < 3) {
        $j = 0;

        while ($j < 3) {
            print "(i, j)=(" . $i . "," . $j . ")<br/>";
            $j += 1;
        }
        $i += 1;
    }
    ?>
</p>

</body>
</html>