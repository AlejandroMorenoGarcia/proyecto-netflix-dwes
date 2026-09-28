<?php
    include_once "./vendor/autoload.php";

    use Phroute\Phroute\Exception\HttpRouteNotFoundException;
    use Phroute\Phroute\RouteCollector;

    $router = new RouteCollector();

    $router->get("/", function(){
        include_once "app/Views/frontend/index.php";
    });

    $router->get("/admin", function(){
        include_once "app/Views/backend/admin.index.php";
    });


    $router->get("/obtener-pass", function(){
        include_once "ejemplos/funciones.php";
        echo create_pass();
    });



    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    try{
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }catch (\Phroute\Phroute\Exception\HttpRouteNotFoundException $e){
        $response = "Eres muy tonto";
    }

    echo $response;
?>