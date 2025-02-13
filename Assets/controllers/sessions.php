<?php

function sessionSet($username)
{
    $expiryTime = time() + (60 * 60);
    $_SESSION['username'] = $username;
    $_SESSION['expireTime'] = $expiryTime;
    setcookie(session_name(), session_id(), $expiryTime, '/');
    setcookie('username', $_SESSION['username'], $expiryTime, '/');
    session_write_close();
}

function sessionUnset()
{
    if (isset($_SESSION['username'], $_SESSION['expireTime']) && $_SESSION['expireTime'] < time()) {
        session_unset();
        session_destroy();
        setcookie(session_name(), '', time() - 3600, '/');
        setcookie('username', '', time() - 3600, '/');
    }
}
