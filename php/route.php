<?php 
if($_GET['command'] && $_GET['value'])
{
	$command = $_GET['command'];
	$value   = $_GET['value'];
	var_dump(compact('command','value'));

}
?>