<?php

    require __DIR__.'/inc/app.inc.php';

    $app = Application::getInstance();
    $app->get('/hello', 'DemoController:main');
    $app->run();


