<?php

namespace Application\Controller;

use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class IndexController extends MasterController
{
    public function indexAction()
    {
        $adapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');

        // MultiRow
        $sql = "SELECT * FROM users";
        $users = $adapter->query($sql,array())->toArray();

        // SingleRow
		$sql = "SELECT * FROM users WHERE id = :id";
		$user1 = $adapter->query($sql, array('id' => 1))->current()->getArrayCopy();

        return $this->respond(new ViewModel([
                    'users' => $users,
                    'user1' => $user1,
                ]));
    }

    public function jsonAction()
    {
        $adapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');

        // MultiRow
        $sql = "SELECT * FROM users";
        $users = $adapter->query($sql,array())->toArray();

        // SingleRow
        $sql = "SELECT * FROM users WHERE id = :id";
        $user1 = $adapter->query($sql, array('id' => 1))->current()->getArrayCopy();

        return $this->respond(new JsonModel([
                    'users' => $users,
                    'user1' => $user1,
                ]));
    }


    public function jsonpostAction()
    {
        return $this->jsonAction();
    }

}
