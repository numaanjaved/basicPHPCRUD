<?php
views('partials/head.php');
?>

<div class="auth_container container height-100 d-flex justify-content-center align-items-center">
    <div class="position-relative">
        <div class="card p-2 text-center">
            <h6>Please enter OTP<br>to verify your account</h6>
            <span class="mail_msg">A code has been sent to <b><?= $_SESSION['otpEmail']  ?><b> </span>
            <span class="text text-danger fs-4 mt-2 fw-semibold"><?= $_SESSION['otpError'] ?? '' ?> </span>

            <form action="/basicPHPCRUD/otp" method="POST" class="inputs d-flex flex-column justify-content-center align-items-center mt-2">
                <div id="otp" class="d-flex flex-row ">
                    <input class="mx-2 mt-3 text-center form-control rounded" type="text" id="first" maxlength="1" name="dig1" autocomplete="off" />
                    <input class="mx-2 mt-3 text-center form-control rounded" type="text" id="second" maxlength="1" name="dig2" autocomplete="off" />
                    <input class="mx-2 mt-3 text-center form-control rounded" type="text" id="third" maxlength="1" name="dig3" autocomplete="off" />
                    <input class="mx-2 mt-3 text-center form-control rounded" type="text" id="fourth" maxlength="1" name="dig4" autocomplete="off" />
                    <input class="mx-2 mt-3 text-center form-control rounded" type="text" id="fifth" maxlength="1" name="dig5" autocomplete="off" />
                </div>

                <button type="submit" class="btn btn-primary w-50 login_btn fs-3 validate">Validate</button>
            </form>
        </div>
    </div>
</div>

<?php
views('partials/footer.php');
?>