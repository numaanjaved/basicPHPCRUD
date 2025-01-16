<?php
$router->get('/basicPHPCRUD', basePath('Assets/controllers/home.php'));
$router->get('/basicPHPCRUD/home', basePath('Assets/controllers/home.php'));
$router->get('/basicPHPCRUD/read', basePath('Assets/controllers/CRUD/read.php'));
$router->get('/basicPHPCRUD/create', basePath('Assets/controllers/CRUD/create.php'));
$router->post('/basicPHPCRUD/create', basePath('Assets/controllers/data/validate.php'));
$router->get('/basicPHPCRUD/delete', basePath('Assets/controllers/CRUD/delete.php'));
$router->post('/basicPHPCRUD/delete', basePath('Assets/controllers/data/destroy.php'));
$router->get('/basicPHPCRUD/update', basePath('Assets/controllers/CRUD/update.php'));
$router->post('/basicPHPCRUD/update', basePath('Assets/controllers/CRUD/update.form.php'));
// $router->post('/basicPHPCRUD/updaterecord', basePath('Assets/controllers/CRUD/update.php'));
