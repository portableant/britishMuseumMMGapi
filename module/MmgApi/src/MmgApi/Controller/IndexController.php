<?php
namespace MmgApi\Controller;

use MmgApi\Controller\AbstractRestfulJsonController;
use Zend\View\Model\JsonModel;

class IndexController extends AbstractRestfulJsonController
{
    public function getList()
    {
        return new JsonModel(array('data' => "This will hold MMG data"));
    }
}