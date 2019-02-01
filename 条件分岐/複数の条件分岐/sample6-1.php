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
    $domain="jp";
    print "ドメイン:".$domain."<br/>";
    if($domain=="in"){
        print "インドのトップレベルドメイン";
    }
    else if($domain=="cn"){
        print "中国のトップレベルドメイン";
    }
    else if($domain=="jp"){
        print "日本のトップレベルドメイン";
    }
    else{
        print "不明なトップレベルドメイン";
    }
    ?>
</p>

</body>
</html>