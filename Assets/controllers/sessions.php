<?php

function cookieSet($username)
{
    $expiryTime = time() + (60 * 60 * 24 * 7);
    setcookie('username', $username, $expiryTime, '/');
}

function cookieRemove()
{
    setcookie('username', '', time() - 3600, '/');
}
