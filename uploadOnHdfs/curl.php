<?php
	header("Access-Control-Allow-Origin:http://localhost:50070"); 
	header("Access-Control-Allow-Methods : POST, GET, OPTIONS, PUT, PATCH, DELETE");
	header("Access-Control-Allow-Headers : Content-Type,api_key,Authorization,X-Auth-Token");
	if($_GET == null)
	{
		echo '<html><body>Erreur 404</body></html>';
	}
	
	else if(isset($_GET['adr']))
	{
		$result = file_get_contents( 'http://'.$_GET['adr']);
		if($result)
		{
			echo $json_encode(result);
		}
	}
