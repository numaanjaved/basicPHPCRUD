<?php

function sessionSet($username)
{
    $expiryTime = time() + (60 * 60 * 24 * 7);
    setcookie('username', $username, $expiryTime, '/');
}

function sessionUnset()
{
    setcookie('username', '', time() - 3600, '/');
}
