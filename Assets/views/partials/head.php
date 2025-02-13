<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Assets/images/favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="shortcut icon" href="Assets/images/favicon/favicon-32x32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="Assets/css/homeStyles.css">
    <link rel="stylesheet" href="Assets/css/notificationStyles.css">
    <link rel="stylesheet" href="Assets/css/alertError.css">
    <link rel="stylesheet" href="Assets/css/navbarStyles.css">
    <?php if ($_SERVER['REQUEST_URI'] === '/basicPHPCRUD/login') {
        echo '<link rel="stylesheet" href="Assets/css/loginStyles.css">';
    }
    if ($_SERVER['REQUEST_URI'] === '/basicPHPCRUD/otp') {
        echo '<link rel="stylesheet" href="Assets/css/otpStyles.css">';
    }
    ?>
    <title>CRUD | <?php
                    if ($_SERVER['REQUEST_URI'] === '/basicPHPCRUD/' || $_SERVER['REQUEST_URI'] === '/basicPHPCRUD/home') {
                        echo "Home Page";
                    } elseif ($_SERVER['REQUEST_URI'] === '/basicPHPCRUD/read') {
                        echo "Profiles Record";
                    } elseif ($_SERVER['REQUEST_URI'] === '/basicPHPCRUD/create') {
                        echo "Create Profile";
                    } elseif ($_SERVER['REQUEST_URI'] === '/basicPHPCRUD/delete') {
                        echo "Delete Profile";
                    } elseif ($_SERVER['REQUEST_URI'] === '/basicPHPCRUD/update') {
                        echo "Update Profile";
                    } elseif ($_SERVER['REQUEST_URI'] === '/basicPHPCRUD/login') {
                        echo "Login Page";
                    } elseif ($_SERVER['REQUEST_URI'] === '/basicPHPCRUD/otp') {
                        echo "Verify OTP";
                    } else {
                        echo "404!";
                    } ?></title>
</head>

<body>