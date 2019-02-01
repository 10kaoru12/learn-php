<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-02-01
 * Time: 20:13
 */
setcookie("buy[1]", "television");
setcookie("buy[2]", "video");
setcookie("buy[3]", "audio");
?>
<html>
<head>
    <title>PHP</title>
</head>
<body>
<?php
if (isset($_COOKIE["buy"])) {
    $val = $_COOKIE["buy"];
    print ("<p>");
    print ("購入したものは下記の通りです<br>");
    for($i=1;$i<4;$i++){
        print ($val[$i] . "<br>");
    }
} else {
    print ("<p>値をセットしました</p>");
}
?>
</body>
</html>
