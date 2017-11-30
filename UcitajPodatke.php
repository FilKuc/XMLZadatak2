<?php


include 'vendor/autoload.php';
use Sabre\Xml\Service;
$service = new Sabre\Xml\Service();
$xml = file_get_contents('zadatak1.xml');

$ucitaj = $service->parse($xml);

print_r($ucitaj);

?>