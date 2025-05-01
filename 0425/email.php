<form action="upConfirm.php" method="post" enctype="multipart/form-data">
<input type="hidden" name='no' value='<?php echo $no?>'>
Name:<input type="text" name="uName"><br>
Email:<input type="email" name="sumail"><br>
Photo:<input type="file" name="file"><br>
<input type="submit" value="Register">

</form>