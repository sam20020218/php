<?php
session_start();



if(isset($_COOKIE["manager"])){
    echo "歡迎管理員，你可觀看表單的填寫"."<br>";
    echo "<a href='link.php'>表單</a><br>";
    echo "<a href='list.php'>表單結果</a><br>";
}
else {
    echo "illigal login";
    header("Refresh:3;url='login.php'");

}
?>
