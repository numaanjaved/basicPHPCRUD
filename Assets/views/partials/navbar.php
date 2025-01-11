<header class="header">
    <nav class="navbar d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
        <div class="logo d-flex justify-content-center align-items-center gap-2"> <i
                class="fa-solid fa-address-card"></i>
            <span class="logoName">Profiles</span>
        </div>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/basicPHPCRUD/" class="nav-link px-3 <?php echo ($_SERVER['REQUEST_URI'] == '/basicPHPCRUD/' ? 'activeLink' : 'navLinks'); ?>">Home</a></li>
            <li><a href="/basicPHPCRUD/records" class="nav-link px-3 <?php echo ($_SERVER['REQUEST_URI'] == '/basicPHPCRUD/records' ? 'activeLink' : 'navLinks'); ?>">Records</a></li>
        </ul>
        <button class="btn btn-danger logout_btn">Logout</button>
    </nav>
</header>