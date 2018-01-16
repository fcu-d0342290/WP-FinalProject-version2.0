<?php session_start(); ?>

<?php
    $_SESSION['Account'] = null;
    echo '登出成功....';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=../html/homePage.html>';
?>