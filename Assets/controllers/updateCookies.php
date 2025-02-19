<?php

require_once('Assets/models/find.php');
function updateCookies($userId)
{
    $profile = find($userId);
    $encodeInJSON = json_encode($profile);
    $expireTime = time() + (60 * 60 * 24 * 7);
    setcookie('loginInfo', $encodeInJSON, $expireTime, '/');
}
