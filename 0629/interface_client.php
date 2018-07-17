<meta charset="utf-8">
<?php
$array=array(
	'uri'=>'http://10.128.17.32',
	'location'=>'http://10.128.17.32/interface_server.php',
	'trace'=>true
);
$client=new SoapClient(null,$array);
echo $client->show();
echo $client->add(1,2);
echo $client->sub(3,1);
?>