<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-02-01
 * Time: 20:59
 */

    session_start();
    $old_id=session_id();

    session_regenerate_id();
    $new_id=session_id();

?>

<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php

    if(!isset($_COOKIE[session_name()])){
        print ("初回の訪問です。セッションを開始しています");
    }
    else{
        print ("前のセッションIDは".$old_id."です<br>");
        print ("今のセッションIDは".$new_id."です<br>");
    }

?>

</body>
</html>