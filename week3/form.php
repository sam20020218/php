<?php
session_start();
?>

<html>
    <head></head>


<body>

    <?php

    if(isset($_SESSION["check"])){
        echo "welcome";
        header("Location:link.php");
    }
    else if($_SESSION["manage"]){
        echo "welcome manager";
        header("Location:link.php");
    }
    else{
        echo "illigal login";
        header("Refresh:3;url='login.php'");
    }


?>
</body>

</html>