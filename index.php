<?php

chdir(dirname(__DIR__));

require 'vendor/autoload.php';

use Framework\Http\Request;

require 'src/Framework/Http/Request.php';
header('X-Developer: Irina Krainova');

$request = new Request();

print_r($request->getQueryParams()['name']);
print_r($request->getQueryParams()['surname']);

/*
header('X-Developer: Irina Krainova');
//print_r('hello');
//var_dump($_GET);супер глобальный массив

$name=$_GET['name'];
$surname=$_GET['surname'];

printf('Hello, %s %s',$name, $surname);
//var_dump($_SERVER); супер глобальный массив

//$arr=[
//	'key1'=>'value1',
//	'key2'=>
//		[
//		'key3'=>'value3'
//		]
//	];

//print_r(json_encode($arr));	

//$arr='{"key1":"value1","key2":{"key3":"value3"}}';
//var_dump(json_encode($arr));	
	
function getLand($deault = 'en'){
	if(isset($_GET['lang']) && !empty($_GET['lang'])){
		return $_GET['lang'];
	}
	if(isset($_POST['lang']) && !empty($_POST['lang'])){
		return $_POST['lang'];
	}
	if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && !empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
		return $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	}		
	return $deault;
}
print_r(getLand());

$request=[
	'get'=>$_GET,
	'post'=>$_POST,
	];
	
$request['get']['name'];
*/
?>