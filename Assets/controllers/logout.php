<?php

function logout()
{
    setcookie('username', '', time() - 3600, '/');
    setcookie('loginInfo', '', time() - 3600, '/');
    header('location: /basicPHPCRUD/');
    exit;
}
logout();
