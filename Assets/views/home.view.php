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
    <div class="d-flex justify-content-center flex-column align-items-center my-5">
        <h2 class="mb-5 text text-dark fw-bold fs-1">Choose Operation</h2>
        <div class="d-flex gap-3">
            <a href="/basicPHPCRUD/create" class="btn btn-primary btn-lg fs-2">Create</a>
            <a href="/basicPHPCRUD/read" class="btn btn-success btn-lg fs-2">Read</a>
            <a href="#" class="btn btn-secondary btn-lg fs-2">Update</a>
            <a href="/basicPHPCRUD/delete" class="btn btn-danger btn-lg fs-2">Delete</a>
        </div>
    </div>
</main>
<?php views("partials/footer.php") ?>