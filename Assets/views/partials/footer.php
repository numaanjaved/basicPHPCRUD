<footer class="footer d-flex justify-content-center align-items-center">
    <p class="footerText">&copy; Codesty Games 2025 | All Rights Reserved</p>
</footer>

<!-- scripts section -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="Assets/javascript/views/form/charLength.js" type="module"></script>
<script src="Assets/javascript/views/form/adminCredentials.js" type="module"></script>
<script src="Assets/javascript/views/form/imageUpload.js" type="module"></script>
<script src="Assets/javascript/views/records/RUDButtons.js"></script>
<script src="Assets/javascript/views/home/alerts/remove.js" type="module"></script>
<?php if ($_SERVER['REQUEST_URI'] === '/basicPHPCRUD/login') {
    echo '<script src="Assets/javascript/views/login/eyeBtn.js"></script>';
}
?>
</body>

</html>