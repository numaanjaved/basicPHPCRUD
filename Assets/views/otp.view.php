<?php
views('partials/head.php');
?>

<div class="auth_container container height-100 d-flex justify-content-center align-items-center">
    <div class="position-relative">
        <div class="card p-2 text-center">
            <h6>Please enter OTP<br> to verify your account</h6>
            <span class="mail_msg">A code has been sent to <?= "ahmedkahout07@gmail.com" ?> <span>
                    <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                        <input class="mx-2 mt-5 text-center form-control rounded" type="text" id="first" maxlength="1" />
                        <input class="mx-2 mt-5 text-center form-control rounded" type="text" id="second" maxlength="1" />
                        <input class="mx-2 mt-5 text-center form-control rounded" type="text" id="third" maxlength="1" />
                        <input class="mx-2 mt-5 text-center form-control rounded" type="text" id="fourth" maxlength="1" />
                        <input class="mx-2 mt-5 text-center form-control rounded" type="text" id="fifth" maxlength="1" />
                    </div>

                    <button type="submit" class="btn btn-primary w-25 login_btn fs-3 validate" id="login_form_btn">Validate</button>
        </div>

    </div>
</div>

<?php
views('partials/footer.php');
?>