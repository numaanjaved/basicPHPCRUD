<?php
views('partials/head.php');
views('partials/navbar.php');
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
            <div
                class="individual_user_data_container position-relative w-100 d-flex justify-content-start flex-column align-items-center">
            </div>
        </div>
    </div>
</section>
<?php
views('partials/footer.php');
?>