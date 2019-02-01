<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-02-01
 * Time: 20:07
 */
if (isset($_COOKIE["visited"])) {
    $count = $_COOKIE["visited"] + 1;
} else {
    $count = 1;
}

if ($count > 3) {
    setcookie("visited", $count, time() - 1800);
} else {
    setcookie("visited", $count);
}
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
