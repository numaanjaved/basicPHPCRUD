<?php
views("partials/head.php");
views("partials/navbar.php");
require('Assets/models/store.php');
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
    <div class=" py-2 px-5 profiles_main_container d-flex flex-column align-items-center bg-body-tertiary">
        <h3 class="fs-1 w-100 text-center bg-dark text-light rounded py-3 my-5">Profiles</h3>
        <div class="profiles_container d-flex flex-column align-items-start w-100 gap-3">
            <?php if (is_array(fetchAll())): ?>
                <?php foreach (fetchAll() as $profile): ?>
                    <div class="py-3 px-2 profile_container w-50 rounded bg-body-tertiary d-flex align-items-center flex-column border border-2 border-secondary ">
                        <h4 class="profile_heading fs-2 fw-bold mb-5">User Profile Details</h4>
                        <div class="profile_data w-100 d-flex flex-row">
                            <div class="picture_container d-flex flex-column align-items-center w-25">
                                <img src="<?= $profile['image_path'] ?>" alt="Profile Picture" width="100" height="100" class="rounded shadow-sm border">
                                <p class="profile_id fs-3 fw-semibold my-3">Profile Id: <?= $profile['user_id'] ?></p>
                            </div>
                            <div class="border-start border-dark text_container d-flex flex-column align-items-start w-75 ps-3">
                                <p class="first_name fs-3 fw-semibold">Full Name:</p>
                                <p class="first_name fs-3 fw-regular w-100 mb-3"><?= $profile['username'] ?></p>
                                <p class="first_name fs-3 fw-semibold">Email:</p>
                                <p class="first_name fs-3 fw-regular w-100 mb-3"><?= $profile['email'] ?></p>
                                <p class="first_name fs-3 fw-semibold">Contact Number:</p>
                                <p class="first_name fs-3 fw-regular w-100 mb-3"><?= $profile['contact'] ?></p>
                                <p class="first_name fs-3 fw-semibold">Address:</p>
                                <p class="first_name fs-3 fw-regular w-100 mb-3"><?= $profile['address'] ?></p>
                                <p class="first_name fs-3 fw-semibold">Profile Description:</p>
                                <span style="white-space: pre-line;" class="first_name fs-3 fw-regular w-100 mb-3"><?= $profile['bio'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</main>
<?php views("partials/footer.php") ?>