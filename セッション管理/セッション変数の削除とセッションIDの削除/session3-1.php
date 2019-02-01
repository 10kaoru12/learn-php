<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-02-01
 * Time: 20:35
 */
    session_start();
?>

<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php
    if(!isset($_SESSION["visited"])){
        print ("初回の訪問です。セッションを開始します。");

        $_SESSION["visited"]=1;
        $_SESSION["date"]=date("c");
    }
    else{
        $visited=$_SESSION["visited"];
        $visited++;

        print ("訪問回数は".$_SESSION["visited"]."です<br>");

        $_SESSION["visited"]=$visited;

        if(isset($_SESSION["date"])){
            print ("前回の訪問に日時は".$_SESSION["date"]."です<br>");
        }

        $_SESSION["date"]=date("c");
    }
?>

<p>
    <a href="./session3-2.php">ログアウトする</a>
</p>

</body>
</html>