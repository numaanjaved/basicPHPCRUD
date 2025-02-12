<?php
views("partials/head.php");
views("partials/navbar.php");
require('Assets/models/store.php');
?>

<main class="main">
    <div class=" py-2 px-5 profiles_main_container d-flex flex-column align-items-center bg-body-tertiary">
        <h5 class="text text-info fs-1 w-100 text-center bg-dark rounded py-3 fw-regular">Click <span class="text-danger">'Delete'</span> to remove a profile.</h5>
    </div>
    <section class="user_data_section w-100 d-flex justify-content-center align-items-center">
        <div class="user_data_main_container w-100 d-flex flex-column justify-content-center align-items-center">
            <h1 class="user_data_section_heading w-100 d-flex justify-content-center align-items-center  flex-row">
                Profiles</h1>
            <div
                class="user_data_display_container w-100 d-flex justify-content-center align-items-center flex-column">
                <div class="data_headings_container w-100 d-flex justify-content-between flex-row">
                    <div class="text_container d-flex justify-content-evenly align-items-center">
                        <h4 class="data_heading">Picture</h4>
                        <h4 class="data_heading">Profile ID</h4>
                        <h4 class="data_heading">Full Name</h4>
                        <h4 class="data_heading">Profile Type</h4>
                    </div>
                    <div class="actions_container d-flex justify-content-center align-items-center">
                        <h4 class="data_heading w-100">Actions</h4>
                    </div>
                </div>
                <div class="individual_user_data_container position-relative w-100 d-flex justify-content-start flex-column align-items-center">
                    <?php if (is_array(fetchAll())): ?>
                        <?php foreach (fetchAll() as  $record):  ?>

                            <div class="individual_user_data w-100 d-flex justify-content-between align-items-center">
                                <div class="text_record d-flex justify-content-evenly align-items-center">
                                    <div class="user_profile_data d-flex justify-content-center align-items-center">
                                        <figure class="profile_img_container">
                                            <img class="user_profile_img" src="<?= $record['image_path'] ?>" alt="Profile Picture">
                                        </figure>
                                    </div>
                                    <p class="user_profile_data" id="user_id"><?= $record['user_id'] ?></p>
                                    <p class="user_profile_data" id="user_fullName_data"><?= $record['firstname'] . ' ' . $record['lastname'] ?></p>
                                    <p class="user_profile_data" id="user_type_data"><?= $record['user_type'] ?></p>
                                </div>
                                <div class="profile_btns_container d-flex justify-content-evenly flex-row align-items-center">
                                    <form method="POST">
                                        <input type="hidden" name="profId" value="<?= $record['user_id'] ?>">
                                        <button class="Ops_Buttons btn fs-4 btn-danger fw-semibold" id="delete">Delete</button>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text text-warning fs-1 fw-semibold">No Records Found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php views("partials/footer.php") ?>