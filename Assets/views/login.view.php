<?php
views('partials/head.php');
?>
<main class="main">
    <div class="notifications_container d-flex flex-column gap-2 mt-5 pt-5">
        <div class="errors_container d-flex flex-column gap-2"></div>
        <?php if (isset($_SESSION['errors'])): ?>
            <?php
            $containerId = 0;
            foreach ($_SESSION['errors'] as $errors):
                $containerId += 1;
            ?>
                <div class="err_notification_container <?= 'cont' . $containerId ?>" id="<?= 'errNotificationContainer' . $containerId ?>">
                    <div class="err_text_container errorCustom <?= 'errTextCont' . $containerId ?>">
                        <h3 class="notification_err_heading"><?= htmlspecialchars($errors['attrName']) . ':' . ' ' . htmlspecialchars($errors['errMsg']) ?></h3>
                        <button class="err_notification_close_btn" id="errNotificationCloseBtn" type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                    </div>

                </div>
            <?php endforeach;
            unset($_SESSION['errors']); ?>
        <?php endif; ?>

    </div>
    <div class="loginPage_main_container d-flex justify-content-center align-items-center w-100">
        <div class="loginPage_sub_container d-flex justify-content-evenly align-items-center flex-column">
            <h2 class="login_heading">Login</h2>
            <form novalidate class="login_form d-flex justify-content-start flex-column align-items-center" method="POST">
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

<?php views('partials/footer.php'); ?>