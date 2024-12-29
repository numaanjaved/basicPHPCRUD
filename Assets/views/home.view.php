<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./Assets/images/favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="shortcut icon" href="./Assets/images/favicon/favicon-32x32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../Assets/css/style.css">
    <link rel="stylesheet" href="../../Assets/css/homeStyles.css">
    <link rel="stylesheet" href="../../Assets/css/modalStyles.css">
    <link rel="stylesheet" href="../../Assets/css/notificationStyles.css">
    <link rel="stylesheet" href="../../Assets/css/alertError.css">
    <title>CRUD | Home Page</title>
</head>

<body>

    <?php require_once "./partials/navbar.php"; ?>

    <main class="main">
        <div class="notifications_container d-flex flex-column gap-2"></div>
        <section class="data_input_section d-flex justify-content-center align-items-center w-100">
            <form novalidate class="data_form d-flex flex-row justify-content-center align-items-center w-100">
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
                        <img src="../../Assets/images/default_profile.png" alt="Default Profile Picture" id="form_img"
                            class="w-100 h-100" name="profile_img">
                    </div>
                </div>
                <div class="form_input_content d-flex justify-content-between align-items-center flex-column">
                    <div class="form_text_content_container w-100 d-flex flex-row justify-content-between">
                        <div class="type_input_container d-flex flex-column">
                            <label class="text_form_labels" for="user_Fname">First Name</label>
                            <input type="text" class="user_inputs" id="user_Fname" name="user_Fname" autocomplete="off"
                                placeholder="e.g., John">

                            <label class="text_form_labels" for="user_Lname">Last Name</label>
                            <input type="text" class="user_inputs" id="user_Lname" name="user_Lname" autocomplete="off"
                                placeholder="e.g., Smith">
                            <label class="text_form_labels" for="user_email">Email</label>
                            <input type="email" class="user_inputs" id="user_email" name="user_email" autocomplete="off"
                                placeholder="e.g., johnsmith@gmail.com">

                            <label class="text_form_labels" for="user_contact">Contact Number</label>
                            <input type="tel" class="user_inputs" id="user_contact" name="user_contact"
                                autocomplete="off" placeholder="e.g., 921234567890">

                            <label class="text_form_labels" for="user_address">Address</label>
                            <input type="text" class="user_inputs" id="user_address" name="user_address"
                                autocomplete="off" placeholder="e.g., 123 Elm St, Springfield, IL">
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
                                placeholder="Write 250-300 characters" class="user_bio_input"></textarea>
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
    </main>
    <footer class="footer d-flex justify-content-center align-items-center">
        <p class="footerText"></p>
    </footer>

    <!-- scripts section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>