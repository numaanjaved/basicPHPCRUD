<?php
views('partials/head.php');
views('partials/navbar.php');
?>
<div class="allProfilesContainer d-flex justify-content-center">
    <div class="my-5 py-3 px-2 profile_container w-50 rounded bg-body-tertiary d-flex align-items-center flex-column border border-2 border-secondary ">
        <h4 class="profile_heading fs-2 fw-bold mb-5">User Profile Details</h4>
        <div class="profile_data w-100 d-flex flex-row">
            <div class="picture_container d-flex flex-column align-items-center w-25">
                <img src="<?= $image_path ?>" alt="Profile Picture" width="100" height="100" class="rounded shadow-sm border">
                <p class="profile_id fs-3 fw-semibold my-3">Profile Id: <?= $user_id ?></p>
            </div>
            <div class="border-start border-dark text_container d-flex flex-column align-items-start w-75 ps-3">
                <p class="first_name fs-3 fw-semibold">Full Name:</p>
                <p class="first_name fs-3 fw-regular w-100 mb-3"><?= $firstname . ' ' . $lastname ?></p>
                <p class="first_name fs-3 fw-semibold">Email:</p>
                <p class="first_name fs-3 fw-regular w-100 mb-3"><?= $email ?></p>
                <p class="first_name fs-3 fw-semibold">Contact Number:</p>
                <p class="first_name fs-3 fw-regular w-100 mb-3"><?= $contact ?></p>
                <p class="first_name fs-3 fw-semibold">Address:</p>
                <p class="first_name fs-3 fw-regular w-100 mb-3"><?= $address ?></p>
                <p class="first_name fs-3 fw-semibold">Profile Description:</p>
                <span style="white-space: pre-line;" class="first_name fs-3 fw-regular w-100 mb-3"><?= $bio ?></span>
            </div>
        </div>
        <button class="mt-5 btn w-25 btn-danger fw-semibold fs-3"><a class="nav-link" href="/basicPHPCRUD/home">Close</a></button>
    </div>
</div>
<?php
views('partials/footer.php');
?>