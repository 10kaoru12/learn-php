<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-02-01
 * Time: 20:46
 */
session_start();
?>

<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php
print ("セッション変数の確認をします<br>");
if (!isset($_SESSION["visited"])) {
    print ("セッション変数visitedは登録されていません<br>");
} else {
    print ($_SESSION["visited"] . "<br>");
}

print ("セッションIDの確認をします<br>");
if (!isset($_COOKIE["PHPSESSID"])) {
    print ("セッションは登録されていません<br>");
} else {
    print ($_COOKIE["PHPSESSID"] . "<br>");
}
?>

</body>
</html>