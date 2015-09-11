<?php

return array(
    'php-debug-bar' => array(
        'view' => array(
            'custom-style-path' => 'zf-snap-php-debug-bar.css',
        ),
        // Enables/disables PHP Debug Bar
        'enabled' => false,

        'auto-append-assets' => false,

        'zend-db-adapter-service-name' => 'Zend\Db\Adapter\Adapter',

        // ServiceManager keys to inject collectors
        // http://phpdebugbar.com/docs/data-collectors.html
        'collectors' => array(),

        // ServiceManager key to inject storage
        // http://phpdebugbar.com/docs/storage.html
        'storage' => null,
    ),
);
