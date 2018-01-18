<?php

namespace Filip\Zadatak\Controller\PageReader;

class PageReader extends \Magento\Framework\App\Action\Action
{

protected $UcitajPodatke;
public function __construct(
\filip\UcitajPodatke2 $UcitajPodatke
){

$this->UcitajPodatke = $UcitajPodatke;

}

public function parsedXml()
{

	$filename = 'test.xml';
        $parsedXml = $this->UcitajPodatke->executeXml($filename);

}

public function execute()
{
	
        $this->getResponse()->setBody(parsedXml());
        return;

}



}
