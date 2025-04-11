<form action="./case2.php" method="POST">
<input type="text" name="action" id="action" value="ping" />
<input type="text" name="host" id="host" value="127.0.0.1" />
<input type="submit" />
</form>
<?php
if($_POST['action']=='ping') // ping is the default param value
{
	echo shell_exec("ping -c1 ".$_POST['host']);
}
?>