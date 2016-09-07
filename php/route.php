<?php 
if(isset($_GET['value']))
{
	
	$value   = $_GET['value'];
	
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

		exec('python '.$direction);
	
	

}
?>