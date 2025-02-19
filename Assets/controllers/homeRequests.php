<?php

if ($_POST['request'] === 'Read') {
    require_once('Assets/controllers/CRUD/profile.php');
    exit();
} elseif ($_POST['request'] === 'Update') {
    dd('Update request');
    exit();
} elseif ($_POST['request'] === 'Delete') {
    require_once('Assets/controllers/data/destroy.php');
    exit();
}
