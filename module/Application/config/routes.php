<?php

return array(
    'routes' => array(
        'home' => array(
            'type' => 'Zend\Mvc\Router\Http\Method',
            'options' => array(
                'route'    => '/',
                'verb'     => 'get',
                'defaults' => array(
                    'controller' => 'Application\Controller\Index',
                    'action'     => 'index',
                ),
            ),
        ),
        // The following is a route to simplify getting started creating
        // new controllers and actions without needing to create a new
        // module. Simply drop new controllers in, and you can access them
        // using the path /application/:controller/:action
        'application' => array(
            'type'    => 'Literal',
            'options' => array(
                'route'    => '/application',
                'defaults' => array(
                    '__NAMESPACE__' => 'Application\Controller',
                    'controller'    => 'Index',
                    'action'        => 'index',
                ),
            ),
            'may_terminate' => true,
            'child_routes' => array(
                'json' => array(
                    'type'    => 'Literal',
                    'options' => array(
                        'route'    => '/index/json',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Application\Controller',
                            'controller'    => 'Index',
                            'action'        => 'json',
                        ),
                    ),
                ),
                'jsonpost' => array(
                    'type'    => 'Literal',
                    'options' => array(
                        'route'    => '/index/json-post',
                        'verb'     => 'post',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Application\Controller',
                            'controller'    => 'Index',
                            'action'        => 'jsonpost',
                        ),
                    ),
                ),
            ),
        ),
    ),
);