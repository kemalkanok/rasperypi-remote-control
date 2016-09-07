<?php 
if($_GET['command'] && $_GET['value'])
{
	$command = $_GET['command'];
	$value   = $_GET['value'];
	if($command == 'motor')
	{
		switch ($value) {
			case '1':
				$direction =  "yukarı";
				$path = __DIR__ . 'goF.py';
				$direction = $path;
				break;
			case '2':
				$direction =  "aşağı";
				break;
			case '3':
				$direction =  "sol";
				break;
			case '4':
				$direction =  "sağ";
				break;
			
			default:
				$direction = 'stop';
				break;
		}
		file_put_contents('commands.txt', file_get_contents('commands.txt') .PHP_EOL.$direction);
	}
	

}
?>