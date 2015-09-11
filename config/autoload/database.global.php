<?php

$dbParams = [
    'database' => 'abd_zf2_debugbar',
    'username' => 'root',
    'password' => '',
    'hostname' => '127.0.0.1',
    'port'     => '3306',
];

return [
	'db' => [
        'driver'   => 'pdo',
        'dsn'      => 'mysql:dbname='.$dbParams['database'].';host='.$dbParams['hostname'].':'.$dbParams['port'],
        'database' => $dbParams['database'],
        'username' => $dbParams['username'],
        'password' => $dbParams['password'],
        'hostname' => $dbParams['hostname'],
        'port'     => $dbParams['port'],
	],
];
