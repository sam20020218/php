
<?php

if(isset($_COOKIE["username"])){
    echo "welcome back".$_COOKIE["username"];
}
else if(isset($_COOKIE["manager"])){
    echo "welcome back manager".$_COOKIE["manager"];
}


?>
<h1>Please Login to use system</h1>

<form action="logincheck.php" method="POST">
    please input your usename:<input type="text" name="username"><br>
    please input your password:<input type="password" name="userpassword"><br>
    <input type="reset"><input type="submit">
</form>



<?php
date_default_timezone_set("Asia/Taipei");
echo time();
echo "<br>";
echo "time now:";
echo date("Y-m-d H:i:s");
header("Refresh:100");











?>