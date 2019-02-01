<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-02-01
 * Time: 19:56
 */
$flag=setcookie("visited",1);
?>
<html>
<head>
    <title>PHP test</title>
</head>
<body>
<?php
    if($flag){
        print "<p>クッキーを書き込みました。";
    }
    else{
        print "<p>クッキーの書き込みに失敗しました。";
    }
?>
</body>
</html>
