<form action="./case1.php" method="POST">
<input type="text" nam<form action="./case1.php" method="POST">
<input type="text" name="host" id="host" value="127.0.0.1" />
<input type="submit" />
</form>
<?php
echo shell_exec("ping -c1 ".$_POST['host']);
?>
e="host" id="host" value="127.0.0.1" />
<input type="submit" />
</form>
<?php
echo shell_exec("ping -c1 ".$_POST['host']);
?>
