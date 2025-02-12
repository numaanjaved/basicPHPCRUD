<?php

function logout()
{
    session_unset();
    session_destroy();
    setcookie(session_name(), '', time() - 3600, '/');
    setcookie('username', '', time() - 3600, '/');
}
logout();

header('location: /basicPHPCRUD/');
exit;
