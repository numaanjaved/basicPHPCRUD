<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="shortcut icon" href="../../Assets/images/favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="shortcut icon" href="../../Assets/images/favicon/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="../../Assets/css/style.css">
    <link rel="stylesheet" href="../../Assets/css/loginStyles.css">
    <link rel="stylesheet" href="../../Assets/css/alertError.css">
    <link rel="stylesheet" href="../../Assets/css/notificationStyles.css">
    <link rel="stylesheet" href="../../Assets/css/navbarStyles.css">

    <title>Login Page</title>
</head>

<body>
    <?php
    require_once './partials/navbar.php';
    ?>
    <main class="main">
        <div class="notifications_container d-flex flex-column gap-2"></div>
        <div class="loginPage_main_container d-flex justify-content-center align-items-center w-100">
            <div class="loginPage_sub_container d-flex justify-content-evenly align-items-center flex-column">
                <h2 class="login_heading">Login</h2>
                <form novalidate class="login_form d-flex justify-content-start flex-column align-items-center">
                    <input type="text" class="login_input" id="login_userName" name="login_userName"
                        placeholder="Username" spellcheck="false" autocomplete="off">
                    <div class="password_container w-100 d-flex flex-row">
                        <input type="password" class="login_input" id="login_userPassword" name="login_userPassword"
                            placeholder="Password" spellcheck="false" autocomplete="off">
                        <button type="button" id="passwordBtn" class="password_btn btn btn-primary"><i
                                class="fa-regular fa-eye"></i></button>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 login_btn" id="login_form_btn">Login</button>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>