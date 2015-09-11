<?php

namespace Application\Helpers;

use Application\Service\AbstractServiceLocator;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\View\Model\JsonModel;

class JsonDebugger extends AbstractServiceLocator
{
    public function getDebugData(JsonModel $model)
    {
        $model->setVariable('debug',[
            'db_profile' => $this->getDbProfiles(),
        ]);

        return $model;
    }


    protected function getDbProfiles()
    {
        $dbProfiler = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter')->getProfiler();
        $queryProfiles = $dbProfiler->getQueryProfiles();

        $dbQueries = [];
        foreach ($queryProfiles as $profile)
        {
            $profileData = $profile->toArray();

            if (isset($profileData['stack']))
                unset($profileData['stack']);

            $dbQueries[] = $profileData;
        }

        return $dbQueries;
    }

}
