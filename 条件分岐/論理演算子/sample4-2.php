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
    $suugaku=45;
    $eigo=82;
    print "数学:".$suugaku."英語:".$eigo."<br/>";
    if($suugaku>50||$eigo>50){
        print "合格です<br/>";
    }
    else{
        print "不合格です。<br/>";
    }

    $suugaku=42;
    $eigo=39;
    print "数学:".$suugaku."英語:".$eigo."<br/>";
    if($suugaku>50||$eigo>50){
        print "合格です。";
    }
    else{
        print "不合格です。<br/>";
    }
    ?>
</p>

</body>
</html>