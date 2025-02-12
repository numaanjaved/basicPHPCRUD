<?php
views("partials/head.php");
views("partials/navbar.php");
?>

<main class="main" style="min-height: 610px;">
    <div class="d-flex justify-content-center flex-column align-items-center my-5 h-100">
        <h2 class="mb-5 text text-dark fw-bold fs-1">Choose Operation</h2>
        <div class="d-flex gap-3">
            <a href="/basicPHPCRUD/create" class="btn btn-primary btn-lg fs-2">Create</a>
            <a href="/basicPHPCRUD/read" class="btn btn-success btn-lg fs-2">Read</a>
            <a href="/basicPHPCRUD/update" class="btn btn-secondary btn-lg fs-2">Update</a>
            <a href="/basicPHPCRUD/delete" class="btn btn-danger btn-lg fs-2">Delete</a>
        </div>
    </div>
</main>
<?php views("partials/footer.php") ?>