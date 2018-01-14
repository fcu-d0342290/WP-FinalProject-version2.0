<?php
include("mysql_connect.php");

    if(isset($_POST['inputName']) && isset($_POST['inputEmail']) && isset($_POST['inputPhone']) && isset($_POST['inputAddress']) && 
        isset($_POST['inputCategory']) && isset($_POST['inputResource']) && isset($_POST['inputQuantity'])) {
        
        $Name = $_POST["inputName"];
        $Email = $_POST["inputEmail"];
        $Phone = $_POST["inputPhone"];
		$Address = $_POST["inputAddress"];   
        $Category = $_POST["inputCategory"];
		$Resource = $_POST["inputResource"];
		$Quantity = $_POST["inputQuantity"];

		$t=$_FILES['myfile']['tmp_name'];
		$name=$_FILES['myfile']['name'];
		move_uploaded_file($t,'../img/'.$name);

		if($Name != null && $Email != null && $Phone != null && $Address != null && $Category != null && $Resource != null && $Quantity != null)
		{

			$sql = "insert into requirementlist (name,email,phone,address,category,resource,quantity) values('$Name','$Email','$Phone','$Address','$Category','$Resource','$Quantity')";
			$result = mysqli_query($con,$sql) or die('上傳失敗');
            //將帳號寫入session，方便驗證使用者身份

            echo "註冊完成";
			echo '<meta http-equiv=REFRESH CONTENT=1;url=../html/homePage.html>';
		}
		else
		{
			echo "註冊失敗，請輸入完整資料";
			echo '<meta http-equiv=REFRESH CONTENT=1;url=../html/needHelpForm.html>';
		}
		
		
	}
?>