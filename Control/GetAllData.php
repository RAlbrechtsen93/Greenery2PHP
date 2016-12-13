<?php
/**
 * Created by PhpStorm.
 * User: R_Alb
 * Date: 12/12/2016
 * Time: 10:59 AM
 */

require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../View');
$twig = new Twig_Environment($loader, array(
    'auto_reload' => true
));
$template = $twig->loadTemplate('index.html.twig');

//Start GetAllData script

$url = "http://greeneryws1.azurewebsites.net/Service1.svc?wsdl";
$client = new SoapClient($url);

$allData = $client->GetAllData();
$data1 = json_decode(json_encode($allData), true);
$data2 = $data1["GetAllDataResult"];
$data3 = $data2["Greenery"];

echo "<br>";
foreach ($data3 as $row)
{
    echo '<tr>';
    echo '<td>Id' . $row["Id"] . ' <br> </td>';
    echo '<td>Temperature' . $row ["Temperature"]. '<br></td>';
    echo '<td>Humidity' . $row["Humidity"] . '<br> </td>';
    echo '<td>Light' . $row["Light"] . '<br> </td>';
    echo '<td>Average' . $row["Average"] . '<br> </td>';
    echo '<td>TimeStamp' . $row["TimeStamp"] . '<br> </td>';
    echo '</tr>' ;
}