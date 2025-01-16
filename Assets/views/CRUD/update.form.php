<?php
views("partials/head.php");
views("partials/navbar.php");
?>
<main class="main">
    <div class="bg-body-tertiary">
        <div class="py-3 px-5 text-center ">
            <div class=" d-flex gap-3 justify-content-start align-items-center">
                <img src="https://github.com/mdo.png" alt="mdo" width="60" height="60" class="rounded-circle">
                <h1 class="text-body-emphasis">Welcome Guest!</h1>
            </div>
        </div>
    </div>
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
        <form novalidate method="POST" action="/basicPHPCRUD/updaterecord" enctype="multipart/form-data" class="data_form d-flex flex-row justify-content-center align-items-center w-100">
            <input type="hidden" name="userId" value="<?= $_SESSION['inputs']['userId'] ?? $record['user_id'] ?>">
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
                    <input type="hidden" name="image_name" value="<?= $_SESSION['inputs']['imageName']  ?? $record['image_name'] ?>">
                    <input type="hidden" name="image_path" value="<?= $_SESSION['inputs']['imagePath'] ?? $record['image_path'] ?>">
                </div>
                <div
                    class="profile_picture_display_container d-flex justify-content-center align-items-center overflow-hidden">
                    <img src="<?= $record['image_path'] ?>" alt="Default Profile Picture" id="form_img"
                        class="w-100 h-100" name="profile_img">
                </div>
            </div>
            <div class="form_input_content d-flex justify-content-between align-items-center flex-column">
                <div class="form_text_content_container w-100 d-flex flex-row justify-content-between">
                    <div class="type_input_container d-flex flex-column">
                        <label class="text_form_labels" for="user_Fname">First Name</label>
                        <input type="text" class="user_inputs" id="user_Fname" name="user_Fname" autocomplete="off" placeholder="e.g., John" value="<?= $_SESSION['inputs']['firstName'] ?? $record['firstname']  ?>">

                        <label class="text_form_labels" for="user_Lname">Last Name</label>
                        <input type="text" class="user_inputs" id="user_Lname" name="user_Lname" autocomplete="off" placeholder="e.g., Smith" value="<?= $_SESSION['inputs']['lastName'] ??  $record['lastname'] ?>">
                        <label class="text_form_labels" for="user_email">Email</label>
                        <input type="email" class="user_inputs" id="user_email" name="user_email" autocomplete="off" placeholder="e.g., johnsmith@gmail.com" value="<?= $_SESSION['inputs']['email'] ?? $record['email']  ?>">

                        <label class="text_form_labels" for="user_contact">Contact Number</label>
                        <input type="tel" class="user_inputs" id="user_contact" name="user_contact"
                            autocomplete="off" placeholder="e.g., 921234567890" value="<?= $_SESSION['inputs']['contact'] ?? $record['contact'] ?>">

                        <label class="text_form_labels" for="user_address">Address</label>
                        <input type="text" class="user_inputs" id="user_address" name="user_address"
                            autocomplete="off" placeholder="e.g., 123 Elm St, Springfield, IL" value="<?= $_SESSION['inputs']['address'] ?? $record['address'] ?>">

                        <input type="hidden" name="select_user" id="select_user" class="select_user_type" value="<?= $_SESSION['inputs']['userType'] ?? $record['user_type'] ?>">
                    </div>
                    <div class="type_textArea_container d-flex flex-column">

                        <label class="text_form_labels" for="user_address">Profile Description</label>
                        <textarea name="user_bio" id="user_bio" spellcheck="false" autocomplete="off"
                            placeholder="Write 250-300 characters" class="user_bio_input"><?= $_SESSION['inputs']['bio'] ?? $record['bio'] ?></textarea>
                        <div class="textAreaInfoMsgContainer d-flex justify-content-between align-items-center">
                            <span class="limit_exceed_text"></span>
                            <span class="limit_text">0/300</span>
                        </div>
                    </div>
                </div>
                <div class="btn_container w-100 d-flex flex-row justify-content-center align-items-center">
                    <a href="/basicPHPCRUD/" class=" form_btn btn btn-danger">Cancel</a>
                    <button type="submit" id="submit_btn" class="form_btn btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </section>
</main>

<?php views("partials/footer.php") ?>