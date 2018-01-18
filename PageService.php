<?php

namespace Filip\Zadatak\PageService;

class PageService 
{

private $Reader;
private $Writer;

public function __construct(
Filip\Zadatak\Controller\PageReader $Reader,
Filip\Zadatak\Controller\PageWriter $Writer
){

$this->Reader = $Reader;
$this->Writer = $Writer;

}
public function execute()
{

	$PageDispay = $this->Reader->parsedXml();
	$this->Writer->writeXml($PageDisplay);

}
