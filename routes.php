<?php
$router->get('/basicPHPCRUD', basePath('Assets/controllers/index.php'));
$router->get('/basicPHPCRUD/home', basePath('Assets/controllers/home.php'));
$router->post('/basicPHPCRUD/home', basePath('Assets/controllers/homeRequests.php'));
$router->get('/basicPHPCRUD/create', basePath('Assets/controllers/CRUD/create.php'));
$router->post('/basicPHPCRUD/create', basePath('Assets/controllers/data/validate.php'));
$router->get('/basicPHPCRUD/update', basePath('Assets/controllers/CRUD/update.php'));
$router->post('/basicPHPCRUD/update', basePath('Assets/controllers/CRUD/update.form.php'));
$router->post('/basicPHPCRUD/updaterecord', basePath('Assets/controllers/data/updateValidate.php'));
$router->get('/basicPHPCRUD/updaterecord', basePath('Assets/controllers/CRUD/update.form.php'));
$router->get('/basicPHPCRUD/login', basePath('Assets/controllers/login.php'));
$router->post('/basicPHPCRUD/login', basePath('Assets/controllers/data/loginValidate.php'));
$router->get('/basicPHPCRUD/logout', basePath('Assets/controllers/logout.php'));
$router->get('/basicPHPCRUD/otp', basePath('Assets/controllers/otp.php'));
$router->post('/basicPHPCRUD/otp', basePath('Assets/controllers/otpValidate.php'));
$router->get('/basicPHPCRUD/register', basePath('Assets/controllers/register.php'));
$router->post('/basicPHPCRUD/register', basePath('Assets/controllers/data/validate.php'));
$router->get('/basicPHPCRUD/noAdmin', basePath('Assets/controllers/adminMsg.php'));
