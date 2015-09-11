<?php

namespace Application\Service;

use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;

abstract class AbstractServiceLocator extends AbstractHelper implements ServiceLocatorAwareInterface
{
    protected $sm;

    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        if ($this->sm === null)
            $this->sm = $serviceLocator;

        return $this;
    }

    public function getServiceLocator()
    {
        return $this->sm;
    }

}
