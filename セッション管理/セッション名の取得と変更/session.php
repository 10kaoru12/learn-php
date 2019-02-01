<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-02-01
 * Time: 20:52
 */
    session_name("phpsession");
    session_start();
?>

<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php

print ("現在のセッション名は".session_name()."です");
?>

</body>
</html>