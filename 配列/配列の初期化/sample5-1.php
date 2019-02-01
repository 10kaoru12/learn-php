<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>PHPテスト</title>
</head>
<body>

<p>PHPのテストです。</p>

<pre>
    <?php
    $var = array("yamada" => 82,
        "endou" => 76,
        "yakahashi" => 64);

    $var["yoshida"] = 91;
    print_r($var);
    ?>
</pre>

</body>
</html>