<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-02-01
 * Time: 19:59
 */
if (isset($_COOKIE["visited"])) {
    $count = $_COOKIE["visited"] + 1;
} else {
    $count = 1;
}
$flag = setcookie("visited", $count);
?>

<html>
<head>
    <title>PHP test</title>
</head>

<?php
print ("<p>訪問回数は" . $count . "回目です</p>");
?>
</html>
