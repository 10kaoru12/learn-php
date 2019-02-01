<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-02-01
 * Time: 20:54
 */
session_start();
?>

<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php

if (!isset($_COOKIE[session_name()])) {
    print ("初回の訪問です。セッションを開始します");
} else {
    print ("セッションは開始しています<br>");
    print ("クッキーは" . $_COOKIE[session_name()] . "です<br>");
    print ("session_id()は" . session_id() . "です。<br>");
}

?>

</body>
</html>