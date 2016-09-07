<?php 
if($_GET['command'] && $_GET['value'])
{
	$command = $_GET['command'];
	$value   = $_GET['value'];
	if($command == 'motor')
	{
		switch ($value) {
			case '1':
				$direction =  "yukarı";//top
				$direction = __DIR__ . '/goF.py';
				
				break;
			case '2':
				$direction =  "aşağı";
				$direction = __DIR__ . '/goB.py';
				break;
			case '3':
				$direction =  "sol";
				break;
			case '4':
				$direction =  "sağ";
				break;
			
			default:
				$direction = 'stop';
				$direction = __DIR__ . '/halt.py';
				break;
		}
		echo $direction;
	}
	

}
?>