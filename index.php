<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
        <link rel="stylesheet" href="./dst/css/index.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131225464-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-131225464-1');
        </script>
        <title>Lib-gate analytics</title>
    </head>
    <body>
<?php if (strpos($_SERVER['QUERY_STRING'], 'bad-ui') !== false) : ?>
        <header class="badui-header">
            BAD UI
        </header>

        <h2 class="badui-title">
            いいねありがとうございました。
        </h2>
        <div class="wrapper" style="padding: 16px;">
            <a class="twitter-moment" href="https://twitter.com/i/moments/1102519851556327424?ref_src=twsrc%5Etfw">UIってむずかしいね</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
        </div>
<?php elseif (strpos($_SERVER['QUERY_STRING'], 'itex') !== false) : ?>
        <header class="itex-header">
            ITEX通信
        </header>

        <h2 class="itex-title">
            いいねありがとうございました。
        </h2>

        <div class="wrapper itex">
            <p>こちらの記事の内容はSlackの<a href="https://app.slack.com/client/TPXECNKK8/CPMAZMDUZ">社内通知チャンネル</a>にも配信しています。<br>コメントはチャンネル内にていただけると嬉しいです！</p>
            <p style="text-align: center;">★いいねをしてくれた方限定　特典映像★</p>
            <div class="youtube">
              <iframe src="https://www.youtube.com/embed/MXBgOUqJBaA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
<?php endif ?>
    </body>
</html>