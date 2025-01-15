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
</main>
<?php views("partials/footer.php") ?>