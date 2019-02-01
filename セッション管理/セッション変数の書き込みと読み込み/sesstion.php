<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-02-01
 * Time: 20:26
 */
session_start();
?>

<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php
if (!isset($_SESSION["visited"])) {
    $_SESSION["visited"] = 1;
    $_SESSION["date"] = date("c");
} else {
    $visited = $_SESSION["visited"];
    $visited++;

    print ("訪問回数は" . $visited . "です");

    $_SESSION["visited"] = $visited;

    if (isset($_SESSION["date"])) {
        print ("前回の訪問日時は" . $_SESSION["date"] . "です<br>");
    }

    $_SESSION["date"] = date("c");
}
?>

</body>
</html>