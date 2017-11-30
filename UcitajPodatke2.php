<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 28.11.2017.
 * Time: 11:09
 */

include 'vendor/autoload.php';
use Sabre\Xml\Service;
class UcitajPodatke2 {


public function __construct()
{

}
public function citajXml($filename){

    $citaj = file_get_contents($filename);
    return $citaj;
}
public function parseXml($xml){
    $this->file=$xml;
    $service = new Sabre\Xml\Service();
    $parsiraj = $service->parse($xml);
    return $parsiraj;
}
public function ispisXml($output){
    /*
    $service = new Sabre\Xml\Service();
    */
    $ispis = print_r($output);
    return $ispis;
}

public function executeXml($filename){

    $this->citajXml($filename);
    $this->parseXml($filename);
    $this->ispisXml($filename);
    return $filename;
}


}
