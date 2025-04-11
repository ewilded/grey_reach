<form action="./case4.php" method="POST">
<input type="text" name="input_filtered" id="input_filtered" value="false" />
<input type="text" name="action" id="action" value="nslookup" />
<input type="text" name="host" id="host" value="google.com" />
<input type="submit" />
<?php
if($_POST['action']=='nslookup') // let's assume nslookup is the only known value of this thing, while ping is the 'otherwise' option
{
	echo dns_get_record($_POST['host']);	
}
else
{
	if($_POST['input_filtered']=='true') // let's say the default value of 'input_filtered' is 'N', so we don't end up here by default
	{
		echo shell_exec("ping -c1 ".$_POST['host']);		// to even get here, we need: input_filtered=Y, action=ping_or_something_else_than_nslookup, host=127.0.0.1;sleep%2020
	}
	else 
	{
		echo shell_exec("ping -c1 ".escapeshellarg($_POST['host']));	
	}
}
?>