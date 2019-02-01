<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>PHPテスト</title>
</head>
<body>

<p>PHPのテストです。</p>

<p>
    <?php

    $tv = new television();

    $tv->setChannel(20);
    print "現在のチャンネルは" . $tv->getChannel() . "<br/>";

    $tv->setChannel(10);
    print "現在のチャンネルは" . $tv->getChannel() . "<br/>";

    class television
    {
        private $channelNo = 8;

        function setChannel($channel)
        {
            if (($channel >= 1) && ($channel <= 12)) {
                $this->channelNo = $channel;
            } else {
                print "チャンネルは1から12の間で設定してください<br>";
            }
        }

        function getChannel()
        {
            return $this->channelNo;
        }
    }

    ?>
</p>

</body>
</html>