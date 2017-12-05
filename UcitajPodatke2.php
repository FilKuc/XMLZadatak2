<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 28.11.2017.
 * Time: 11:09
 */

include 'vendor/autoload.php';
include 'Pages.php';
include 'Page.php';

use Sabre\Xml\Service;

class UcitajPodatke2
{

    protected $service;

    public function __construct()
    {
        $this->service = new Sabre\Xml\Service();

    }

    public function citajXml($filename)
    {
        $citaj = file_get_contents($filename);
        return $citaj;
    }

    public function parseXml($xml)
    {
        /*
      $this->service->elementMap = [


          '{zadatak1.xml}page' => function(Sabre\Xml\Reader $reader) {
              $pages = new Pages();
              $children = $reader->parseInnerTree();
              foreach($children as $child) {
                  if ($child['value'] instanceof page) {
                      $pages->pages[] = $child['value'];
                  }
              }
              return $pages;
          },
          '{zadatak1.xml}page' => function(Sabre\Xml\Reader $reader) {

              $page = new Page();
              $keyValue = Sabre\Xml\Deserializer\keyValue($reader, 'zadatak1.xml');

              if (isset($keyValue['title'])){
                  $page->title = $keyValue['title'];
              }
               if (isset($keyValue['author'])){
                  $page->author = $keyValue['author'];
               }
               return $page;
          }

       ];
          */

        $this->service->elementMap = [
            '{zadatak1.xml}page' => function(Sabre\Xml\Reader $reader) {
                return Sabre\Xml\Deserializer\keyValue($reader, 'zadatak1.xml');
            },
            '{zadatak1.xml}pages' => function(Sabre\Xml\Reader $reader) {
                return Sabre\Xml\Deserializer\repeatingElements($reader, '{zadatak1.xml}page');
            },



        ];

        $parsiraj = $this->service->parse($xml);
        return $parsiraj;
    }

    public function ispisXml($output)
    {
        /*
        $service = new Sabre\Xml\Service();
        */
        $ispis = print_r($output);
        $ispis = '<pre>' . $ispis . '</pre>';

        return $ispis;
    }

    public function executeXml($filename)
    {

        $varijabla = $this->citajXml($filename);
        $parsanixml = $this->parseXml($varijabla);
        $this->ispisXml($parsanixml);
        return $parsanixml;
    }


}
