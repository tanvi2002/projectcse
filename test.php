<?php
    $link = mysqli_connect('localhost','root','','order');
    if(!$link){
        die("Could not connect:".mysqli_connect_error);
    }

    $query = "INSERT INTO orders(first,last,mail) VALUES($_POST['first_name'],$_POST['last_name'],$_POST['mail'])";

?>
<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
	

	<input type="text" class="form-control" name="first_name" placeholder="First Name">
	<input type="text" class="form-control" name="last_name" placeholder="Last Name">
	<input type="text" class="form-control" name="mail" placeholder="Mail">
	
</form>