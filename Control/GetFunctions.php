<?php
/**
 * Created by PhpStorm.
 * User: R_Alb
 * Date: 12/13/2016
 * Time: 12:11 PM
 */

require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../View');
$twig = new Twig_Environment($loader, array(
    'auto_reload' => true
));
$template = $twig->loadTemplate('index.html.twig');

$url = "http://greeneryws1.azurewebsites.net/Service1.svc?wsdl";
$client = new SoapClient($url);

//Start GetFunctions script

$functions = $client->__getFunctions();
//print_r($functions);
foreach ($functions as $function) {
    echo $function . "<br >";
}