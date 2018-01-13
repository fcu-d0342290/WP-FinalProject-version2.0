<!DOCTYPE html>
<html lang="en">

<head>
	<title>偏鄉大躍進</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
	<link rel="stylesheet" type="text/css" href="../css/dropdown.css">

	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/confirmPassword.js"></script>
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
<form class="form-signin" name="form1" method="post" action="" >
	<h2 class="form-signin-heading">
		<font face="微軟正黑體">註冊會員</font>
	</h2>
	<font face="微軟正黑體">姓名</font>
	<input type="text" name="name" class="form-control">
	<font face="微軟正黑體">信箱</font>
	<input type="email" name="email" class="form-control" required autofocus>
	<font face="微軟正黑體">密碼</font>
	<input type="text" name="password" class="form-control">
	<font face="微軟正黑體">確認密碼</font>
	<input type="text" name="confirmPassword" class="form-control">
	<font face="微軟正黑體">電話號碼</font>
	<input type="text" name="phone" class="form-control">
	<br>
	<button class="btn btn-lg btn-primary btn-block" type="submit">註冊</button>
</body>


<?php
include("mysql_connect.php");

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phone'])) {
		$Name = $_POST["name"];
		$Email = $_POST["email"];
		$Password = $_POST["password"];
		$Phone = $_POST["phone"];
		
		if($Name != null && $Email != null && $Password != null && $Phone != null)
		{
			$sql = "insert into member (name,email,password,phone) values('$Name','$Email','$Password','$Phone')";
			$result = mysqli_query($con,$sql) or die('信箱已註冊');
			//將帳號寫入session，方便驗證使用者身份
			echo "註冊完成";
			echo '<meta http-equiv=REFRESH CONTENT=1;url=../html/homePage.html>';
		}
		else
		{
			echo "註冊失敗，請輸入完整資料";
		}
		
		
	}
?>