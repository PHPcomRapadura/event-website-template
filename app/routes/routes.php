<?php

use Slim\App;

use app\controllers\HomeController;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index']);
};