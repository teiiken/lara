<?php
$app['router']->get('/', function() {
	return '<h1>route sucess!</h1>';
});

$app['router']->get('test',function() {
	return '<h1>test</h1>';
});

$app['router']->get('welcome', 
	['uses' => 'App\Http\Controllers\WelcomeController@index']);

