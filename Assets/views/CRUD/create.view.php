<?php
$action = $_SERVER['REQUEST_URI'] === '/basicPHPCRUD/create' ? '/basicPHPCRUD/create' : '/basicPHPCRUD/register';
views("partials/head.php");
$_SERVER['REQUEST_URI'] === '/basicPHPCRUD/create' ? views("partials/navbar.php") : '';

$defaultImage = 'Assets/images/default_profile.png';
$profileImage = !empty($_SESSION['uploadedPicturePath']) && file_exists($_SESSION['uploadedPicturePath']) ? htmlspecialchars($_SESSION['uploadedPicturePath']) : $defaultImage;
?>

<main class="main">
    <div class="notifications_container d-flex flex-column gap-2">
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
    <section class="data_input_section d-flex justify-content-center align-items-center w-100">
        <form novalidate method="POST" action="<?= $action ?>" enctype="multipart/form-data" class="data_form d-flex flex-row justify-content-center align-items-center w-100">
            <div
                class="form_profile_picture_container d-flex justify-content-evenly align-items-center border flex-column">
                <div class="image_input d-flex justify-content-center align-items-center w-100 flex-column">
                    <span id="img_info" class="bg-white text-center mb-4">Please upload and image with 1:1 aspect
                        ratio</span>
                    <label for="imageUpload"
                        class="choose_img_label d-flex justify-content-center align-items-center fw-medium">Upload
                        profile picture</label>
                    <input type="file" name="image" accept="image/png, image/webp, image/jpg, image/jpeg"
                        id="imageUpload">
                </div>
                <div
                    class="profile_picture_display_container d-flex justify-content-center align-items-center overflow-hidden">
                    <img src="<?= $profileImage ?>" alt="Default Profile Picture" id="form_img"
                        class="w-100 h-100" name="profile_img">
                </div>
            </div>
            <div class="form_input_content d-flex justify-content-between align-items-center flex-column">
                <div class="form_text_content_container w-100 d-flex flex-row justify-content-between">
                    <div class="type_input_container d-flex flex-column">
                        <label class="text_form_labels" for="user_Fname">First Name</label>
                        <input type="text" class="user_inputs" id="user_Fname" name="user_Fname" autocomplete="off" placeholder="e.g., John" value="<?= $_SESSION['inputs']['firstName'] ?? '' ?>">

                        <label class="text_form_labels" for="user_Lname">Last Name</label>
                        <input type="text" class="user_inputs" id="user_Lname" name="user_Lname" autocomplete="off" placeholder="e.g., Smith" value="<?= $_SESSION['inputs']['lastName'] ?? '' ?>">
                        <label class="text_form_labels" for="user_email">Email</label>
                        <input type="email" class="user_inputs" id="user_email" name="user_email" autocomplete="off" placeholder="e.g., johnsmith@gmail.com" value="<?= $_SESSION['inputs']['email'] ?? '' ?>">

                        <label class="text_form_labels" for="user_contact">Contact Number</label>
                        <input type="tel" class="user_inputs" id="user_contact" name="user_contact"
                            autocomplete="off" placeholder="e.g., 921234567890" value="<?= $_SESSION['inputs']['contact'] ?? '' ?>">

                        <label class="text_form_labels" for="user_address">Address</label>
                        <input type="text" class="user_inputs" id="user_address" name="user_address"
                            autocomplete="off" placeholder="e.g., 123 Elm St, Springfield, IL" value="<?= $_SESSION['inputs']['address'] ?? '' ?>">
                        <input type="hidden" class="user_inputs" id="otp" name="otp"
                            autocomplete="off">
                        <div class="select_container d-flex flex-column">
                            <label for="select_user" id="choose_user_heading" class="text_form_labels">Choose User
                                Type</label>
                            <select name="select_user" id="select_user" class="select_user_type">
                                <option class="user_option" id="user_option" value="User" selected>User</option>
                                <option class="user_option" id="admin_option" value="Admin">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="type_textArea_container d-flex flex-column">

                        <label class="text_form_labels" for="user_address">Profile Description</label>
                        <textarea name="user_bio" id="user_bio" spellcheck="false" autocomplete="off"
                            placeholder="Write 250-300 characters" class="user_bio_input"><?= $_SESSION['inputs']['bio'] ?? '' ?></textarea>
                        <div class="textAreaInfoMsgContainer d-flex justify-content-between align-items-center">
                            <span class="limit_exceed_text"></span>
                            <span class="limit_text">0/300</span>
                        </div>
                        <div class="user_type_container w-100">
                            <div
                                class="user_type_sub_container w-100 d-flex justify-content-evenly align-items-start flex-column">
                                <div
                                    class="choose_user_container w-100 d-flex justify-content-center align-items-start flex-column">
                                    <h3 class="admin_heading">User Name and Password for Admin
                                    </h3>
                                    <div class="admin_attr_container flex-column w-100">
                                        <label class="admin_label" for="admin_name_input">Username</label>
                                        <input type="text" id="admin_name_input" name="admin_name"
                                            autocomplete="off" placeholder="e.g., john_smith" class="admin_input">

                                        <label class="admin_label" for="admin_password_input">Password</label>
                                        <input type="password" id="admin_password_input" name="admin_password"
                                            autocomplete="off" placeholder="Enter password here......"
                                            class="admin_input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn_container w-100 d-flex flex-row justify-content-center align-items-center">
                    <button type="reset" id="reset_btn" class=" form_btn btn btn-primary">Reset</button>
                    <button type="submit" id="submit_btn" class="form_btn btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </section>
</main>
<?php views("partials/footer.php") ?>