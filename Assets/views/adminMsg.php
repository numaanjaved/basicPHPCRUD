<?php
views('partials/head.php');
?>



<main style="height: 700px;" class="bg-light">
    <div class="modal mt-5 fs-3 h-100 modal-sheet position-static d-block p-4 py-md-5" tabindex="-1" role="dialog" id="modalSheet">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header border-bottom-0 d-flex justify-content-center">
                    <h1 class="modal-title fs-1 text-danger">No Admin Found<i class="bi bi-person-check-fill"></i></h1>
                </div>
                <div class="modal-body py-0 fs-4">
                    <p class="text text-center"> For using this CRUD (Create, Read, Update, Delete) website, an admin account is necessary to manage operations.<br>Please register as an admin.</p>
                </div>
                <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
                    <button type="button" class="btn fs-3 btn-lg btn-primary mt-5"><a href="/basicPHPCRUD/register" class="nav-link">Register Admin</a></button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php views('partials/footer.php'); ?>