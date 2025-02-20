<?php

function getLoggedInUser()
{
    $decodedJSON = json_decode($_COOKIE['loginInfo'], true);
    return $decodedJSON;
}
