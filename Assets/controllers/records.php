<?php
if (file_exists("../views/records.view.php")) {
    echo "file found";
    require_once "../views/records.view.php";
} else {
    echo "file not found";
}
