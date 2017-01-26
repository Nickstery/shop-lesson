<?php

require_once('../controller/TestClass.php');


$obj = new ReflectionMethod("TestClass", 'test');
$obj->invokeArgs(new TestClass(),[1,2]);























/** Include needed classes */
require_once('../smarty/Smarty.class.php');
require_once('../controller/MainController.php');

/** Global initialization of smarty template engine */
$smarty = new Smarty();

/** Sets the views folder (HTML pages location) */
$smarty->setTemplateDir('../views');

/**
 * Gets the user's request parameters as string
 * http://localhost/test/123 => test/123
 */
$request_uri = ltrim($_SERVER['REQUEST_URI'],"/");


/** strip string to array http://localhost/{route}/{action} => array(route,action)*/
$route_pieces = explode("/", $request_uri);


/**
 * Gets the route from the request http://localhost/{route}/{action} => route
 */
$route = (empty($route_pieces)) ? 'main' : array_shift($route_pieces);

$controller = new MainController();

/**
 * Gets the action from the request http://localhost/{route}/{action} => action
 */
$action = (empty($route_pieces)) ? 'index' : array_shift($route_pieces);

/**
 * Checks if requested route for existence
 */
if(!method_exists($controller, $route)) {
    return $controller->not_found();
}
$controller->$route();
