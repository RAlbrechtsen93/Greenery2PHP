<?php
/**
 * Created by PhpStorm.
 * User: R_Alb
 * Date: 11-12-2016
 * Time: 22:40
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

//Start AddData Script

//$fcs = $client->__soapCall(array('Id' ));

/*
$_POST['greeneryID'];
$_POST['greeneryTemp'];
$_POST['greeneryHumid'];
$_POST['greeneryLight'];
$_POST['greeneryTimestamp'];
$_POST['greeneryAverage'];



$GreenData = array('ID' => $_POST['greeneryID'],  'Temperature' => $_POST['greeneryTemp'], 'Humidity' => $_POST['greeneryHumid'], 'Light' => $_POST['greeneryLight'], 'Timestamp' => $_POST['greeneryTimestamp'], 'Average' => $_POST['greeneryAverage'] );
$json = json_encode($GreenData);
print_r($json);

$client->AddGreeneryData ($GreenData);
*/

