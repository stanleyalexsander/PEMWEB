<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <title>Portofolio of Stanley Alexsander Tamboto - Fullstack Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/component.css">
    <link rel="stylesheet" href="styles/index.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    </style>
</head>

<body>
    <!-- COVER -->
    <div class="container-fluid bg-prim cover z-3 position-absolute">
        <div class="row justify-content-between m-0">
            <div class="col-auto p-0">
                <p class="text-clean">Stanley</p>
            </div>
            <div class="col-auto p-0">
                <p class="text-clean">Alexsander</p>
            </div>
        </div>
        <div class="row my-auto row-welcome">
            <div class="col-auto m-auto p-0">
                <h1 class="text-clean">WELCOME!</h1>
            </div>
        </div>
        <div class="row justify-content-between m-0">
            <div class="col-auto p-0">
                <p class="text-clean">Website Developer</p>
            </div>
            <div class="col-auto p-0">
                <p class="text-clean">Fullstack</p>
            </div>
        </div>
    </div>
    <!-- END COVER -->

    <!-- HERO -->
    <div class="container-fluid container-content">

        <!-- NAVBAR -->
        <?php include 'component/navbar.php'; ?>
        <!-- END NAVBAR -->

        <!-- BIO -->
        <div class="row bio text-prim desktop-query">
            <div class="col m-0 p-0" data-aos="fade-up" data-aos-duration="1000">
                <h1>STANLEY</h1>
            </div>
            <div class="col-3 m-0 p-0">
                <p>I'M A WEBSITE DEVELOPER
                    SPECIALIZE IN FULLSTACK
                    BASED IN INDONESIA
                    <br>
                    <br>
                    FOCUSING ON CREATING
                    PURPOSEFUL USER INTERFACE
                    &
                    EXTRAORDINARY EXPERIENCE
                    <br><br>
                </p>
            </div>
            <div class="col-12 p-0" data-aos="fade-up" data-aos-duration="1500">
                <h1>ALEXSANDER</h1>
            </div>
            <div class="col-3 p-0 ms-auto">
                <p><i>SCROLL TO EXPLORE</i>
                </p>
            </div>
        </div>

        <!-- MEDIA QUERY <978px -->
        <div class="row bio text-prim mobile-query mx-0">
            <div class="col-12 m-0 p-0" data-aos="fade-up" data-aos-duration="1000">
                <h1>STANLEY</h1>
            </div>
            <div class="col-12 p-0 m-0" data-aos="fade-up" data-aos-duration="1500">
                <h1>ALEXSANDER</h1>
            </div>
            <div class="col-12 m-0 p-0">
                <p><br><br>
                    I'M A WEBSITE DEVELOPER
                    SPECIALIZE IN FULLSTACK
                    BASED IN INDONESIA
                    <br>
                    FOCUSING ON CREATING
                    PURPOSEFUL USER INTERFACE
                    &
                    EXTRAORDINARY EXPERIENCE
                    <br><br><br><br>
                </p>
            </div>
            <div class="col-12 p-0 ms-auto">
                <p><i>SCROLL TO EXPLORE</i>
                </p>
            </div>

        </div>
        <!-- ENDMEDIA QUERY <978px -->
        <!-- END BIO -->
    </div>
    <!-- END HERO -->

    <?php
    include 'koneksi.php';

    $sqlProject = "SELECT name FROM project";
    $resultProject = $koneksi->query($sqlProject);

    $koneksi->close();

    $resultProjects = [];
    if ($resultProject->num_rows > 0) {
        while ($row = $resultProject->fetch_assoc()) {
            $resultProjects[] = $row["name"];
        }
    }
    ?>

    <!-- WORKS -->
    <div class="container-fluid bg-prim container-works">
        <div class="row m-0 p-0 desktop-query">
            <div class="col-12 p-0" data-aos="fade-up" data-aos-duration="1000">
                <h2>SOME OF MY</h2>
            </div>
            <div class="col-12 p-0 text-center">
                <p><i>Recent</i></p>
            </div>
            <div class="col-3 p-0 d-flex align-items-end">
                <p class="mb-0">2021 - 2023</p>
            </div>
            <div class="col text-end" data-aos="fade-up" data-aos-duration="1000">
                <h1>WORKS</h1>
            </div>

            <!-- DMSlib -->
            <div class="col-6 col-works d-flex flex-column">
                <p class="mt-auto" data-aos="fade-up" data-aos-duration="1000">UX/UI DESIGN / FRONTEND / BACKEND / DATABASE</p>
                <h2><?= $resultProjects[0] ?></h2>
            </div>

            <div class="col-6 col-works text-end" data-aos="fade-up" data-aos-duration="1000">
                <div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="works/dmslib.php">
                                <img src="img/dmslib_1.png" alt="Image showing some screens of the DMSlib website">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="works/dmslib.php">
                                <img src="img/dmslib_2.png" alt="Image showing some screens of the DMSlib website">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END DMSlib -->

            <!-- PLKM -->
            <div class="col-6 col-works d-flex flex-column">
                <p class="mt-auto" data-aos="fade-up" data-aos-duration="1000">UX/UI DESIGN / FRONTEND / BACKEND / DATABASE / MAINTENANCE</p>
                <h2><?= $resultProjects[1] ?></h2>
            </div>
            <div class="col-6 col-works text-end" data-aos="fade-up" data-aos-duration="1000">
                <div id="carouselAutoplaying2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="works/plkm.php">
                                <img src="img/plkm_1.png" alt="Image showing some screens of the PLKM website">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="works/plkm.php">
                                <img src="img/plkm_2.png" alt="Image showing some screens of the PLKM website">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PLKM -->

            <!-- SMKS Nusantara -->
            <div class="col-6 col-works d-flex flex-column">
                <p class="mt-auto" data-aos="fade-up" data-aos-duration="1000">UX/UI DESIGN / FRONTEND / BACKEND / DATABASE / MAINTENANCE</p>
                <h3><?= $resultProjects[2] ?></h3>
            </div>
            <div class="col-6 col-works text-end" data-aos="fade-up" data-aos-duration="1000">
                <div id="carouselAutoplaying3" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="works/smks-nusantara.php">
                                <img src="img/nusan_1.png" alt="Image showing some screens of the SMKS Nusantara website">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="works/smks-nusantara.php">
                                <img src="img/nusan_2.png" alt="Image showing some screens of the SMKS Nusantara website">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SMKS Nusantara -->
        </div>

        <!-- MEDIA QUERY MOBILE -->
        <div class="row m-0 p-0 mobile-query mobile-row-works text-center">
            <div class="col-12 p-0" data-aos="fade-up" data-aos-duration="1000">
                <h2>SOME OF MY</h2>
            </div>
            <div class="col-12 p-0 text-center">
                <p><i>Recent</i></p>
            </div>
            <div class="col-12 p-0" data-aos="fade-up" data-aos-duration="1000">
                <h1>WORKS</h1>
            </div>
            <div class="col-12 p-0 m-bottom">
                <p class="mb-0">2021 - 2023</p>
            </div>

            <!-- DMSlib -->
            <div class="col-12 col-works text-center" data-aos="fade-up" data-aos-duration="1000">
                <div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="works/dmslib.php">
                                <img src="img/dmslib_1.png" alt="Image showing some screens of the DMSlib website">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="works/dmslib.php">
                                <img src="img/dmslib_2.png" alt="Image showing some screens of the DMSlib website">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-works d-flex flex-column">
                <p class="mt-auto" data-aos="fade-up" data-aos-duration="1000">UX/UI DESIGN / FRONTEND / BACKEND / DATABASE</p>
                <h2>DMSlib</h2>
            </div>
            <!-- END DMSlib -->

            <!-- PLKM -->
            <div class="col-12 col-works text-center" data-aos="fade-up" data-aos-duration="1000">
                <div id="carouselAutoplaying2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="works/plkm.php">
                                <img src="img/plkm_1.png" alt="Image showing some screens of the PLKM website">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="works/plkm.php">
                                <img src="img/plkm_2.png" alt="Image showing some screens of the PLKM website">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-works d-flex flex-column">
                <p class="mt-auto" data-aos="fade-up" data-aos-duration="1000">UX/UI DESIGN / FRONTEND / BACKEND / DATABASE / MAINTENANCE</p>
                <h2>PLKM</h2>
            </div>
            <!-- END PLKM -->

            <!-- SMKS Nusantara -->
            <div class="col-12 col-works text-center" data-aos="fade-up" data-aos-duration="1000">
                <div id="carouselAutoplaying3" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="works/smks-nusantara.php">
                                <img src="img/nusan_1.png" alt="Image showing some screens of the SMKS Nusantara website">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="works/smks-nusantara.php">
                                <img src="img/nusan_2.png" alt="Image showing some screens of the SMKS Nusantara website">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-works d-flex flex-column">
                <p class="mt-auto" data-aos="fade-up" data-aos-duration="1000">UX/UI DESIGN / FRONTEND / BACKEND / DATABASE / MAINTENANCE</p>
                <h3>SMKS <br>NUSANTARA</h3>
            </div>
            <!-- SMKS Nusantara -->
        </div>
        <!-- END MEDIA QUERY MOBILE -->
    </div>
    <!-- END WORKS -->

    <!-- ABOUT -->
    <div class="container-fluid container-content container-about">
        <div class="row p-0">
            <div class="col p-0 m-0">
                <p class="text-sec">A LITTLE MORE ABOUT ME</p>
                <p class="text-about text-prim">
                    <span data-aos="fade-up" data-aos-duration="1000">
                        Hajimemashite ! <br>
                        I’m Stanley, independent web developer, <br>
                        living on planet earth <i class="fa-solid fa-earth-asia"></i> since 2004. <br>
                    </span>
                    <br><br>
                    <span data-aos="fade-up" data-aos-duration="1000">
                        I have +3 years of XP. in creating <br>
                        a website with stronger focus on <br>
                        UI/UX Design and <br>
                        Frontend development. <br>
                    </span>
                    <br><br>
                    <span data-aos="fade-up" data-aos-duration="1000">
                        Since I mostly work independently, <br>
                        I’m also capable of handling <br>
                        backend development and <br>
                        database management.
                    </span>
                </p>
            </div>
        </div>
    </div>
    <!-- END ABOUT -->


    <!-- FOOTER -->
    <?php include 'component/footer.php'; ?>
    <!-- END FOOTER -->
    <script src="script/navbar.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>