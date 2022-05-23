<?php

    spl_autoload_register(function($class) {
        require $class.'.php';
    });

    define('DB_HOST', 'database');
    define('DB_NAME', 'sandbox');
    define('DB_USER', 'root');
    define('DB_PASS', 'rootadmin');
    define('BASE_URL', 'http://localhost:8080');

    $validate = new Validate();
    $userObj = new User();
