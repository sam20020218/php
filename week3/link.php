<?php
session_start();
?>


<html>
    <head>
    
        <meta charset="utf-8">
        <title>活動行程以及報名表單</title>

    </head>

    <body>
        <?php
        echo "<center><h1>活動行程</h1></center><br>";
        echo "<font size='5'>活動時間: 07 月 20 日</font><br>";

        echo "<table border='1'>";
            echo "<tr><td>時間</td><td>活動</td></tr>";
            echo "<tr><td>9:00~11:00</td><td>破冰遊戲</td></tr>";
            echo "<tr><td>11:00~13:00</td><td>吃午餐</td></tr>";
            echo "<tr><td>13:00~15:00</td><td>玩桌遊</td></tr>";
            echo "<tr><td>15:00~17:00</td><td>抽獎</td></tr>";
        echo "</table><br>";

        echo "<hr width='100%'>";

        echo "<center><h1>填寫表單</h1></center><br>";

        echo "<form action='list.php' method='POST'>";

            echo "您的姓名:<input type='text' name='uName'><BR>";

            echo "您的學號:<input type='text' name='uCode'><BR>";

            echo "您的電話:<input type='text' name='uPhone'><BR>";

            echo "您的email:<input type='email' name='umail' ><br>";

            echo "您的性別:<input type='radio' name='ugen' value='male'>男<input type='radio' name='ugen' value='female'>女<br>";

            echo "居住的城市是:";
            echo "<select name='city'>";
                echo "<option value='taipei'>taipei</option>";
                echo "<option value='Keelung'>Keelung</option>";
                
            echo "</select><br>";

            echo "想問的問題:<BR>";
            echo "<textarea cols='30' rows='10' name='ucom'></textarea><BR>";
            echo "<input type='submit'><input type='reset'><br>";
            echo "<a href='logout.php'>登出</a><br>";
            echo "<a href='manager.php'>管理模式</a><br>";

        echo "</form>";


    ?>
    </body>
</html>



