<?php
require('Assets/models/destroy.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $profId = $_POST['profId'];
    destroy($profId);
    header('Location: /basicPHPCRUD/delete');
    exit();
}
