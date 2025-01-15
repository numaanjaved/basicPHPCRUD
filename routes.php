<?php
$router->get('/basicPHPCRUD', basePath('Assets/controllers/home.php'));
$router->get('/basicPHPCRUD/home', basePath('Assets/controllers/home.php'));
$router->get('/basicPHPCRUD/read', basePath('Assets/controllers/read.php'));
$router->get('/basicPHPCRUD/create', basePath('Assets/controllers/create.php'));
$router->post('/basicPHPCRUD/create', basePath('Assets/controllers/data/validate.php'));
