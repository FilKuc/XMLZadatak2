<?php

namespace Filip\Zadatak\Controller\PageWriter;


class PageWriter extends \Magento\Framework\App\Action\Action
{

private $pageFactory;
private $blockFactory;

public function __construct(
Magento\Cms\Model $pageFactory
){

$this->pageFactory = $pageFactory;

}

public function writeXml($testBlock)
{

        $testBlock = [
    	'title' => 'Test block title',
    	'identifier' => 'test-block',
    	'stores' => [0],
    	'is_active' => 1,
	];

        $this->pageFactory->create()->setData($testBlock)->save();
        return $testBlock;

}

public function execute()
    {

        writeXml();
        
    }



}
