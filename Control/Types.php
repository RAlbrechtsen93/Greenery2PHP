<?php
/**
 * Created by PhpStorm.
 * User: R_Alb
 * Date: 12/14/2016
 * Time: 8:50 AM
 */
$url = "http://greeneryws1.azurewebsites.net/Service1.svc?wsdl";
$client = new SoapClient($url);

echo "<h2>Types</h2>";
$types = $client->__getTypes();
//print_r($types);
echo "<ol>";
foreach ($types as $type) {
    echo "<li>" . $type . "</li>";
}