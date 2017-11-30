<?php
include 'vendor/autoload.php';
use Sabre\Xml\Service;
include 'UcitajPodatke2.php';
//$test = new UcitajPodatke2;

$test = new UcitajPodatke2();
$test2 = 'zadatak1.xml';
echo $test->executeXml($test2);



