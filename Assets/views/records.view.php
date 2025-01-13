<?php
views('partials/head.php');
views('partials/navbar.php');
require('Assets/models/store.php');
dd(fetchAll());
?>
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
                <div class="individual_user_data w-100 d-flex justify-content-between align-items-center">
                    <div class="text_record d-flex justify-content-evenly align-items-center">
                        <div class="user_profile_data d-flex justify-content-center align-items-center">
                            <figure class="profile_img_container">
                                <img class="user_profile_img" src="" alt="Profile Picture">
                            </figure>
                        </div>
                        <p class="user_profile_data" id="user_id"></p>
                        <p class="user_profile_data" id="user_fullName_data"></p>
                        <p class="user_profile_data" id="user_type_data"></p>
                    </div>
                    <div class="profile_btns_container d-flex justify-content-evenly flex-row align-items-center">
                        <button class="Ops_Buttons btn btn-success" id="read_btn">Read</button>
                        <button class="Ops_Buttons btn btn-primary" id="update">Update</button>
                        <button class="Ops_Buttons btn btn-danger" id="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
views('partials/footer.php');
?>