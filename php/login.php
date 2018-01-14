<!--<?php //session_start(); ?>-->
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.php");
$Email = $_POST['inputEmail'];
$Password = $_POST['inputPassword'];

//搜尋資料庫資料
$sql = "SELECT * FROM member where email = '$Email'";
$result = mysqli_query($con,$sql);
$row = @mysqli_fetch_array($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($Email != null && $Password != null && $Password == $row['password'])     
{
        //將帳號寫入session，方便驗證使用者身份
        //$_SESSION['Account'] = $Account;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=../html/homePage.html>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=../html/login.html>';
}
?>