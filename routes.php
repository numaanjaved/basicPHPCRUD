<?php
$router->get('/basicPHPCRUD', basePath('Assets/controllers/home.php'));
$router->post('/basicPHPCRUD', basePath('Assets/controllers/data/validate.php'));
$router->get('/basicPHPCRUD/home', basePath('Assets/controllers/home.php'));
$router->post('/basicPHPCRUD/home', basePath('Assets/controllers/data/validate.php'));
$router->get('/basicPHPCRUD/records', basePath('Assets/controllers/records.php'));
