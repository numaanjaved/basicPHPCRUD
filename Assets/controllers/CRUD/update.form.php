<?php
require_once('Assets/controllers/getLoggedInUser.php');
require "Assets/models/find.php";
$profId = $_POST['profId'];
if (getLoggedInUser()['user_type'] === 'admin') {
    $record = find($profId);
    views('CRUD/update.form.php', ['profId' => $profId, 'record' => $record]);
    exit();
} else {
    if (getLoggedInUser()['user_id'] === $profId) {
        $record = find($profId);
        views('CRUD/update.form.php', ['profId' => $profId, 'record' => $record]);
        exit();
    } else {
        dd('Hello');
        $_SESSION['authError'] = 'You are not authorized to perform this action';
        header('location: /basicPHPCRUD/home');
        die();
    }
}
