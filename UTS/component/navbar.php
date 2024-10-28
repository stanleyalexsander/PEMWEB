<?php
// Mendapatkan nama file yang sedang diakses
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<div class="row">
    <nav class="navbar fixed-top bg-clean">
        <div class="container-fluid p-0">
            <a class="navbar-brand p-0" href="/portofolio/index.php">Stan.</a>
            <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse py-auto" id="navbarNavAltMarkup">
                <div class="navbar-nav w-100">
                    <a class="nav-link w-50 align-self-end <?php echo ($currentPage == 'index.php') ? 'text-clean' : 'text-sec'; ?>" href="/portofolio/index.php">
                        <div class="row w-100 m-0">
                            <div class="col-6 text-start">
                                <span class="align-text-top">01/</span>
                            </div>
                            <div class="col-6 text-end">
                                Home
                            </div>
                        </div>
                    </a>
                    <a class="nav-link w-50 align-self-end <?php echo ($currentPage == 'works.php') ? 'text-clean' : 'text-sec'; ?>" href="/portofolio/works.php">
                        <div class="row w-100 m-0">
                            <div class="col-6 text-start">
                                <span class="align-text-top">02/</span>
                            </div>
                            <div class="col-6 text-end">
                                Works
                            </div>
                        </div>
                    </a>
                    <a class="nav-link w-50 align-self-end <?php echo ($currentPage == 'about.php') ? 'text-clean' : 'text-sec'; ?>" href="/portofolio/about.php">
                        <div class="row w-100 m-0">
                            <div class="col-6 text-start">
                                <span class="align-text-top">03/</span>
                            </div>
                            <div class="col-6 text-end">
                                About
                            </div>
                        </div>
                    </a>
                    <a class="nav-link w-50 align-self-end <?php echo ($currentPage == 'gallery.php') ? 'text-clean' : 'text-sec'; ?>" href="/portofolio/gallery.php">
                        <div class="row w-100 m-0">
                            <div class="col-6 text-start">
                                <span class="align-text-top">04/</span>
                            </div>
                            <div class="col-6 text-end">
                                Gallery
                            </div>
                        </div>
                    </a>
                    <a class="nav-link w-50 align-self-end <?php echo ($currentPage == 'contact.php') ? 'text-clean' : 'text-sec'; ?>" href="/portofolio/contact.php">
                        <div class="row w-100 m-0">
                            <div class="col-6 text-start">
                                <span class="align-text-top">05/</span>
                            </div>
                            <div class="col-6 text-end">
                                Contact
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </nav>
</div>