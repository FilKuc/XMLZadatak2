<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 28.11.2017.
 * Time: 11:09
 */
include 'vendor/autoload.php';
use Sabre\Xml\Service;

class UcitajPodatke2
{

    protected $service;

    public function __construct()
    {
        $this->service = new Sabre\Xml\Service();
    }

    public function executeXml($filename)
    {
        $varijabla = $this->citajXml($filename);
        $parsanixml = $this->parseXml($varijabla);
        $this->ispisXml($parsanixml);
        return $parsanixml;
    }

    public function citajXml($filename)
    {
        $citaj = file_get_contents($filename);
        return $citaj;
    }

    public function parseXml($xml)
    {
        $parsiraj = $this->service->parse($xml);
        return $parsiraj;
    }

    public function ispisXml($output)
    {
        $ispis = print_r($output);
        $ispis = '<pre>' . $ispis . '</pre>';
        return $ispis;
    }


}
