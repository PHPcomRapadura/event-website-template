<?php
namespace app\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController
{
    public function index(Request $request, Response $response)
    {
        $json = file_get_contents(dirname(__FILE__, 2).DIRECTORY_SEPARATOR."config/config.json", true);
        $data = (array) json_decode($json);

        view('home', $data);

        return $response;
    }
}