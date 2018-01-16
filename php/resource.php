<!DOCTYPE html>
<html lang="zh-tw">

<head>
	<title>偏鄉大躍進</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/dropdown.css">
	<link rel="stylesheet" type="text/css" href="../css/requirementList.css">

    
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/homePageArticle.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.min.js"></script>

	<script src="../js/dropdown.js"></script>

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
					<a href="../html/login.html">
						<span class="glyphicon glyphicon-asterisk"></span>登入帳號</a>
				</li>

			</ul>
		</nav>
	</header>
	<br>
	<br>
	<br>
	<br>

	<div class="container">
		<div class="col-xs-12  col-sm-12 col-md-12" align="center">
			<font face="微軟正黑體" style="font-size: 6.8vmin;color:rgb(2, 2, 2)">物資需求牆</font>
			<br>
		</div>

			
        <?php
            include("mysql_connect.php");

            $count = 0;
            $sql = "SELECT * FROM requirementList WHERE category ='resources'";
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_row($result))
            {   
                $count++;
                
                echo "<div class='col-xs-12  col-sm-4 col-md-4'>";
                echo "  <div class='requirementDiv'>";
                echo "      <img class='requirementImg' src='../img/$row[7]'>";
                echo "      <font class='requirementFont'>&nbsp;&nbsp;地區：$row[3]<br>&nbsp;&nbsp;需求：$row[5] $row[6]</font>";
                echo "      <div style='padding-top:10px;' align='right'>";
                echo "      <a class='btn btn-success' href='#' role='button'>幫助我</a>";
                echo "      <br>";
                echo "      </div>";
                echo "   </div>";
                echo "</div>";

                if($count%3 == 0){
                    echo "<div class='col-sm-12'>　";
                    echo "</div>";
                }
                
            }
        ?>
    </div>
</body>

</html>