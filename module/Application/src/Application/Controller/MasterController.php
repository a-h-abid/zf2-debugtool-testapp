<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ModelInterface;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

abstract class MasterController extends AbstractActionController
{
    protected function respond(ModelInterface $model)
    {
        if ($model instanceOf JsonModel)
        {
            $model = $this->setDebugData($model);
        }

        return $model;
    }

    private function setDebugData(JsonModel $model)
    {
        $config = $this->getServiceLocator()->get('configuration');

        if ( ! $config['app_debug']) {
            return $model;
        }

        return $this->getServiceLocator()->get('Application\Helpers\JsonDebugger')->getDebugData($model);
    }

}
