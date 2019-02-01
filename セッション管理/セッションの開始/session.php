<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-02-01
 * Time: 20:22
 */
session_start();
?>

<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php
if (!isset($_COOKIE["PHPSESSID"])) {
    print ("初回の訪問です。セッションを開始します");
} else {
    print ("セッションは開始しています");
    print ("セッションIDは" . $_COOKIE["PHPSESSID"] . "です");
}
?>

</body>
</html>
