<?php

function logout()
{
    setcookie('username', '', time() - 3600, '/');
}
logout();

header('location: /basicPHPCRUD/');
exit;
