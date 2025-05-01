<html>

<head>
    <meta charset=utf-8>
</head>
<?php

$no=$_POST["no"];
$name=$_POST["uName"];
$mail=$_POST["sumail"];
$photoName=$name;
$FileName="pic\\".$name.".png";

$link = mysqli_connect( 
    'localhost',  
    'root',       
    '',  
    'work');  
mysqli_set_charset($link, 'utf8');


$sql= "INSERT INTO user (uname, uemail, uphoto) VALUES ('$name','$mail','$photoName')";
$sql1= "SELECT * FROM user WHERE uname='".$name."' AND uemail='".$mail."'";
$result=mysqli_query($link, $sql1);
$records=mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

if($records>0){
    header("Location:fmail.php?no=".$row['no']."");
}
else{
    if(mysqli_query($link, $sql)){
        $result=mysqli_query($link, $sql1);
        $row = mysqli_fetch_assoc($result);
        if( copy($_FILES["file"]["tmp_name"],$FileName)){
            unlink($_FILES["file"]["tmp_name"]);
            header("Location:sendMail.php?no=".$row['no']."");
            }
    }
}


?>
</html>