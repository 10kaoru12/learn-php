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
    $var1=21;
    if($var1<30){
        print "変数の値は30より小さい<br/>";
        $var1="tokyo";
        $var2="osaka";
        if($var1>$var2){
            print "tokyoはosakayoり大きい";
        }
        else{
            print "osakaはtokyoより大きい";
        }
    }
    ?>
</p>

</body>
</html>