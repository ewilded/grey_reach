<form action="./case3.php" method="POST">
<input type="text" name="action" id="action" value="nslookup" />
<input type="text" name="host" id="host" value="google.com" />
<input type="submit" />
</form>
<?php
if($_POST['action']=='nslookup') // let's assume nslookup is the only known value of this thing, while ping is the 'otherwise' option
{
	echo dns_get_record($_POST['host']);	
}
else
{
	echo shell_exec("ping -c1 ".$_POST['host']);
}
?>