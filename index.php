<!DOCTYPE html>
<html>
    <head>
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
        <div class="wrapper" style="padding: 16px;"></div>
        <script>
            window.onload = function(){
                windowClose();
                var wrapper = document.getElementsByClassName('wrapper');
                wrapper[0].insertAdjacentHTML('beforeend', '<p style="font-size: 16px;">いいねありがとうございました！</p>');
            }
            function windowClose(){
                // ウィンドウ閉じる
                window.close();
            }
        </script>
    </body>
</html>