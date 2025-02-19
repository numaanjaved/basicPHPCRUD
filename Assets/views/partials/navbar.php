<?php
$loggedInUser = '';
$userFullName = 'Guest User';
$imagePath = 'Assets/images/default_profile.png';
if (isset($_COOKIE['loginInfo'])) {
    $loggedInUser = json_decode($_COOKIE['loginInfo'], true);
    $userFullName = $loggedInUser['firstname'] . ' ' . $loggedInUser['lastname'];
    $imagePath = $loggedInUser['image_path'];
}
?>
<header class="header">
    <nav class="navbar d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
        <div class=" ms-5 logo d-flex justify-content-center align-items-center gap-2">
            <img src="<?= $imagePath ?>" alt="User Profile Picture" width="75" height="75" class="rounded-circle border border-2 border-dark">
            <span class="logoName"><?= $userFullName ?></span>
        </div>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 gap-3">
            <li><a href="/basicPHPCRUD/" class="nav-link px-3 <?= ($_SERVER['REQUEST_URI'] == '/basicPHPCRUD/' || $_SERVER['REQUEST_URI'] == '/basicPHPCRUD/home' ? 'activeLink' : 'navLinks'); ?>">Home</a></li>
        </ul>
        <button class="btn btn-danger logout_btn"> <a class="nav-link" href="/basicPHPCRUD/logout">Logout</a></button>
    </nav>
</header>