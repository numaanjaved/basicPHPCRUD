<?php

if ($_POST['request'] === 'Create') {
    $_SERVER['REQUEST_URI'] = '/basicPHPCRUD/create';
    require_once('Assets/controllers/CRUD/create.php');
    exit();
} elseif ($_POST['request'] === 'Read') {
    require_once('Assets/controllers/CRUD/profile.php');
    exit();
} elseif ($_POST['request'] === 'Update') {
    $_SERVER['REQUEST_URI'] = '/basicPHPCRUD/updaterecord';
    require_once('Assets/controllers/CRUD/update.form.php');
    exit();
} elseif ($_POST['request'] === 'Delete') {
    require_once('Assets/controllers/data/destroy.php');
    exit();
}
