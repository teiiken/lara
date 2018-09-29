<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
//
require __DIR__.'/../vendor/autoload.php';
//
$app = new Illuminate\Container\Container;
with(new Illuminate\Events\EventServiceProvider($app))->register();
with(new Illuminate\Routing\RoutingServiceProvider($app))->register();
//
require __DIR__.'/../app/Http/routes.php';
//
$request = Illuminate\Http\Request::createFromGlobals();
$response = $app['router']->dispatch($request);
//
$response->send();
//echo dd($request);
?>
