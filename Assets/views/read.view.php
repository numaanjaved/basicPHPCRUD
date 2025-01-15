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
    <div class=" py-2 px-5 profiles_main_container d-flex flex-column align-items-center bg-body-tertiary">
        <h3 class="fs-1 w-100 text-center bg-dark text-light rounded py-3 my-5">Profiles</h3>
        <div class="profiles_container d-flex flex-column align-items-start w-100 gap-3">
            <div class="py-3 px-2 profile_container w-50 rounded bg-body-tertiary d-flex align-items-center flex-column border border-2 border-secondary ">
                <h4 class="profile_heading fs-2 fw-bold mb-5">User Profile Details</h4>
                <div class="profile_data w-100 d-flex flex-row">
                    <div class="picture_container d-flex flex-column align-items-center w-25">
                        <img src="https://github.com/mdo.png" alt="mdo" width="100" height="100" class="rounded">
                        <p class="profile_id fs-3 fw-semibold my-3">Profile Id: Prof001</p>
                    </div>
                    <div class="border-start border-dark text_container d-flex flex-column align-items-start w-75 ps-3">
                        <p class="first_name fs-3 fw-semibold">Full Name:</p>
                        <p class="first_name fs-3 fw-regular w-100 mb-3">Muhammad Ahmed Tahiri</p>
                        <p class="first_name fs-3 fw-semibold">Email:</p>
                        <p class="first_name fs-3 fw-regular w-100 mb-3">ahmedtahiri.webdev@gmail.com</p>
                        <p class="first_name fs-3 fw-semibold">Contact Number:</p>
                        <p class="first_name fs-3 fw-regular w-100 mb-3">+92313554563</p>
                        <p class="first_name fs-3 fw-semibold">Address:</p>
                        <p class="first_name fs-3 fw-regular w-100 mb-3">Hospital Road, Bhaggat Street, Chakwal, Punjab, Pakistan.</p>
                        <p class="first_name fs-3 fw-semibold">Profile Description:</p>
                        <p class="first_name fs-3 fw-regular w-100 mb-3">Mei Hunn jeeyan, Mei hunn bara Takatwar, Mujhy Koi Hara nai saktaa. Yeeeeehaaaa!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php views("partials/footer.php") ?>