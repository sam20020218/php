
<?php
session_start();


$defalutname="nuk";
$defalutpass="1234";

$mananame="nuk1";
$manapass="123456";

$username=$_POST["username"];
$userpass=$_POST["userpassword"];

if ($username==$defalutname && $userpass==$defalutpass){
    echo "login success";
    $_SESSION["check"]=1;
    setcookie("username", $defalutname, time()+10);
    header("Location:form.php");
}
else if($username==$mananame && $userpass==$manapass){
    echo "login success manager";
    $_SESSION["manage"]=0;
    setcookie("manager", $defalutname, time()+100000000);
    header("Location:form.php");
}
else {
    echo "login failed, will send you back in login again";
    header("Refresh:3;url='login.php");
}



?>