<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
</head>
<body class="container">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <?php
            include("nav.php");
        ?>
    </nav>
    <div id="adscenter" class="row">
        <div class="col-md-12">
            
        </div>
    </div>
    <section>
        <article> <!-- 본문 -->
            <?php
                if( empty($_GET['board']) == false ) {
                    $board = "bbs/";
                include($board.$_GET['board'].".php");
                }else{
                include("bbs/main.php");
                }
            ?>
        </article>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
