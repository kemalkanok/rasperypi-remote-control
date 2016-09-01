<?php 
if($_GET['command'] && $_GET['value'])
{
	$command = $_GET['command'];
	$level   = $_GET['level'];

	var_dump(compact('command','level'));
}


?>