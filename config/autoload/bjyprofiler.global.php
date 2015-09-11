<?php

return [
    'service_manager' => [
        'factories' => [
            'Zend\Db\Adapter\Adapter' => 'BjyProfiler\Db\Adapter\ProfilingAdapterFactory',
        ],
    ],
];
