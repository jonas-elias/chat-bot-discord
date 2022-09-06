<?php

use Klein\Klein;

require_once './../vendor/autoload.php';

$klein = new Klein();

$klein->respond('GET', '/route', function () {
    return 'Route!';
});

$klein->dispatch();