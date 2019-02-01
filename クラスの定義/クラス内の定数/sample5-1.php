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

    class television
    {
        private $channelNo = 8;
        const max_channel = 12;
        const min_channel = 1;
        const error_msg = "チャンネルは1から12の間で設定して下さい<br>";

        function setChannel($channel)
        {
            if (($channel >= self::min_channel) && ($channel <= self::max_channel)) {
                $this->channelNo = $channel;
            } else {
                print self::error_msg;
            }
        }

        function getChannel()
        {
            return $this->channelNo;
        }
    }

    $tv = new television();

    $tv->setChannel(20);
    print "現在のチャンネルは" . $tv->getChannel() . "<br>";

    $tv->setChannel(10);
    print "現在のチャンネルは" . $tv->getChannel() . "<br>";
    ?>
</p>

</body>
</html>