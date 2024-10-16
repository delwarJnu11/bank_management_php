<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/" => "controllers/homeController.php",
    "/profile" => "controllers/profileController.php",
    "/transaction_history" => "controllers/transactionController.php",
    "/create_account" => "controllers/createAccountController.php",
];

function controllRoute($uri, $routes){
    require_once __DIR__ . "/views/shared/header.view.php";

    if(array_key_exists($uri, $routes)){
        require_once $routes[$uri];
    }else{
        echo "Page Not Found";
        return http_response_code(404);
    }
    require_once __DIR__ . "/views/shared/footer.view.php";
}

controllRoute($uri, $routes);