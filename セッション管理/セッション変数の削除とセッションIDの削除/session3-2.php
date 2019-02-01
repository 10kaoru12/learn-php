<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-02-01
 * Time: 20:41
 */
    session_start();
?>

<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php
    print ("セッション変数の一覧を表示します<br>");
    print_r($_SESSION);
    print ("<br>");

    print ("セッションIDを表示します<br>");
    print ($_COOKIE["PHPSESSID"]."<br>");

    print ("<p>ログアウトします</p>");

    $_SESSION=array();

    if(isset($_COOKIE["PHPSESSID"])){
        setcookie("PHPSESSID","",time()-1800,"/");
    }

    session_destroy();
?>

<p>
    <a href="session3-3.php">ログアウトの確認</a>
</p>

</body>
</html>