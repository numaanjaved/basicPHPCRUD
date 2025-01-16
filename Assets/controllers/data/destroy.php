<?php
require('Assets/models/destroy.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $profId = $_POST['profId'];
    $path = findPath($profId);
    destroy($profId, $path);
    header('Location: /basicPHPCRUD/delete');
    exit();
}
