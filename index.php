<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new SFretes\DB\Sql();

	$results = $sql->select("SELECT * FROM cad_cliente");

	echo json_encode($results);
	

});

$app->run();

 ?>