<?php

    require __DIR__ . '/src/app.inc.php';

    $app = Application::getInstance();
    $app->get('/hello', 'DemoController:main');
    $app->run();


