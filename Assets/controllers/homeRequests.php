<?php

if ($_POST['request'] === 'Read') {
    require_once('Assets/controllers/CRUD/profile.php');
    exit();
} elseif ($_POST['request'] === 'Update') {
    dd(' Update request ');
} elseif ($_POST['request'] === 'Delete') {
    dd(' Delete request ');
}
