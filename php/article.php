<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>偏鄉大躍進</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/dropdown.css">

    <style>
        img {
            height: auto;
            max-width: 100%;
            margin: auto;
            max-height: 200px;
        }
        .messageBoard{
            border-color:#aaaaee;
            border-width:1px;
            border-style:solid;
            padding:5px;
            background-color:#def8de;
            border-radius:10px; 
        }
    </style>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/inputFile.js"></script>
    <script src="../js/dropdown.js"></script>
    <script>

    </script>
</head>

<body>
    <header id="mdn-header" class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mdn-toggle-nav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="../html/homePage.html">
                &nbsp;&nbsp;
                <img src="../img/title.png">
            </a>

        </div>

        <nav id="mdn-toggle-nav" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <form>
                        <br>
                        <input type="input" class="form-control" id="searchTarget">

                </li>
                <li>
                    <br>
                    <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </li>
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-circle-arrow-up"></span>PAGETOP</a>
                </li>
                <li>
                    <a href="javascript:myFunction();">
                        <span class="glyphicon glyphicon-list-alt"></span>上傳文章</a>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../html/uploadArticle.html">文章</a>
                        <a href="../html/needHelpForm.html">需求單</a>
                    </div>
                </li>
                <li>
                    <a href="../html/aboutUs.html">
                        <span class="glyphicon glyphicon-info-sign"></span>關於我們</a>
                </li>
                <li>
                    <?php
                        if (isset($_SESSION['Account'])){
                            echo "<a href='../php/logout.php'>";
                            echo "<span class='glyphicon glyphicon-asterisk'></span>帳號登出</a>";  
                        }else{
                            echo "<a href='../html/login.html'>";
                            echo "<span class='glyphicon glyphicon-asterisk'></span>登入帳號</a>";
                        }
                    ?>
                </li>
            </ul>
        </nav>
    </header>

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="" style="margin:auto;" align="center">
        <font face="微軟正黑體" style="font-size: 4.8vmin;color:rgb(25, 211, 152)">偏鄉駐點計畫 & 行動車前進偏鄉計畫</font>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-md-2">
            </div>
            <div class="col-sm-4 col-md-4">
                <img src="../img/1.jpg">
            </div>
            <div class="col-sm-4 col-md-4">
                <p>　　小校的教師原配額就少，加上交通的不便，使得老師到市區參加培訓的便利性較低，往往需要更多資源的進入，幫助這些有需要的小校辦理師資培訓。 永齡・鴻海台灣希望小學行動車前進偏鄉服務計畫，今年已經在中彰投地區開辦，這是我們的第一個階段，未來落點服務將深入全台偏遠地區的小校及社區。
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-md-2">
            </div>
            <div class="col-sm-8 col-md-8">
                <p>
                    <br>　　行動車的服務範圍不只在學校，我們認為行動車也有走入社區的必要。社區當中原本就有一些民間單位及社福團體在運行課後照顧與輔導的據點，許多老師及 志工都是照顧學童的重要人物。藉由行動車的進入，我們期許永齡的教材可以成為社區照顧與輔導的重要資源，再加上使用教材前給予專業的師資培訓課程，
                    使得課後的照顧能發揮最大的功效。加上偏鄉駐點計畫，將偏鄉專任永齡教材師資進行社區駐點服務，支持並網絡社區與民間團體的教育與社會支持，進行教 育平等與普及之宗旨。
                </p>


                <!--  facebook like -->
                <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.11';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                <div class="fb-like" data-href="http://www.iecs.fcu.edu.tw/wSite/mp?mp=370201" data-layout="button" data-action="like" data-size="small"
                    data-show-faces="true" data-share="true"></div>

                <!--<iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.iecs.fcu.edu.tw%2FwSite%2Fmp%3Fmp%3D370201&width=80&layout=button&action=like&size=small&show_faces=true&share=true&height=65&appId"
                    width="80" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>-->
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-md-2">
            </div>  
            <div class="col-sm-6 col-md-6">
                <?php
                    include("mysql_connect.php");

                    $sql = "select * from messageboard where articleName ='article1'";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_row($result))
                    {   
                        echo "<div class='messageBoard'>";
                        echo "  <font class='requirementFont'>$row[1] : $row[2]</font><br>";
                        echo "</div><br>";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-md-2">
            </div>  
            <div class="col-sm-6 col-md-6">
                <form class="form-signin" name="form1" method="post" action="" >
                <div class="col-sm-9">
                    <input type="text" name="inputMessage" class="form-control"> 
                </div>
                <div class="col-sm-3">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" style="font-size:15px">留言</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        include("mysql_connect.php");

        if(isset($_POST['inputMessage'])) {
            $Message = $_POST["inputMessage"];
            if(isset($_SESSION['Account'])){
                $UserName = $_SESSION['Account'];
                if($Message != null && $UserName != null)
                {   
                    $sql = "insert into messageboard (articleName,userName,content) values('article1','$UserName','$Message')";
                    $result = mysqli_query($con,$sql);
                    //echo '<meta http-equiv=REFRESH CONTENT=1;url=../html/homePage.html>';
                }
            }else
            {
                echo "<div class='col-sm-3 col-md-3'>
                    </div>  
                    <div class='col-sm-6 col-md-6'>
                        <form class='form-signin' name='form1' method='post' action='' >
                            請先<a href='../html/login.html'>登入</a>
                    </div>";
            }
        }
    ?>
</body>

</html>