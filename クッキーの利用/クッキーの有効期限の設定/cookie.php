<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-02-01
 * Time: 20:03
 */
if (isset($_COOKIE["visited"])) {
    $count = $_COOKIE["visited"] + 1;
} else {
    $count = 1;
}

$flag = setcookie("visited", $count, time() + 180);
?>

<html>
<head>
    <title>PHP</title>
</head>
<body>
<?php
print ("<p>訪問回数は" . $count . "回目です</p>");
?>

</body>
</html>
