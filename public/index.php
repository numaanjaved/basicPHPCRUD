<?php

const BASE_PATH = '../';
if (file_exists(BASE_PATH . 'Core/functions.php')) {
    require_once(BASE_PATH . 'Core/functions.php');
} else {
    echo 'Functions File Not Found';
}
if (file_exists(basePath('Assets/views/loading.php'))) {
    require_once(basePath('Assets/views/loading.php'));
} else {
    echo 'Loading File Not Found';
}
