<?php

if ($_POST['request'] === 'Read') {
    require_once('Assets/controllers/CRUD/profile.php');
    exit();
} elseif ($_POST['request'] === 'Update') {
    require_once('Assets/controllers/CRUD/update.form.php');
    exit();
} elseif ($_POST['request'] === 'Delete') {
    require_once('Assets/controllers/data/destroy.php');
    exit();
}
