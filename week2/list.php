<?php
$s= $_POST["uName"];
$c= $_POST["uCode"];
$p= $_POST["uPhone"];
$g= $_POST["ugen"];
$e=$_POST["umail"];
$cit= $_POST["city"];
$co= $_POST["ucom"];


echo "您的名字:".$s."<br>";
echo "您的學號:".$c."<br>";
echo "您的電話:".$p."<br>";
echo "您的email:".$e."<br>";
echo "您的性別:".$g."<br>";
echo "居住的城市是:".$cit."<br>";
echo "想問的問題".nl2br(strip_tags($co))."<br>";




?>