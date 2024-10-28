<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../img/icon.png">
    <title>Works - PLKM - Portofolio of Stanley Alexsander Tamboto - Fullstack Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/component.css">
    <link rel="stylesheet" href="../styles/works-detail.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <?php include '../component/navbar.php'; ?>
    <!-- END NAVBAR -->

    <?php
    include '../koneksi.php';

    $sqlProject = "SELECT * FROM project WHERE id = 2";
    $resultProject = $koneksi->query($sqlProject);

    $sqlService = "SELECT * FROM services";
    $resultSer = $koneksi->query($sqlService);

    $koneksi->close();

    $resultServ = [];
    if ($resultSer->num_rows > 0) {
        while ($rowS = $resultSer->fetch_assoc()) {
            $resultServ[] = $rowS["name"];
        }
    }

    if ($resultProject->num_rows > 0) {
        $row = $resultProject->fetch_assoc();
        $projectName = $row['name'];
        $projectInd = $row['industry'];
        $projectY = $row['year'];
        $projectOv = $row['overview'];
    } else {
        echo " ";
    }
    ?>

    <!-- HERO -->
    <div class="container-fluid cover bg-plkm">
        <div class="row marquee-row m-0 text-clean">
            <div class="col-12 p-0" data-aos="slide-right" data-aos-easing="ease-out-cubic"
                data-aos-duration="3000">
                <?php
                for ($i = 1; $i <= 6; $i++) {
                    echo "<h2>" . $projectName . "</h2>";
                }
                ?>
            </div>
            <div class="col-12 p-0 grid-bottom" data-aos="slide-left" data-aos-easing="ease-out-cubic"
                data-aos-duration="3000">
                <?php
                for ($i = 1; $i <= 6; $i++) {
                    echo "<h2>" . $projectName . "</h2>";
                }
                ?>
            </div>
        </div>

        <div class="row wrap-padding m-0 text-clean">
            <div class="col-4 p-0 col-services">
                <div class="row p-0 mx-auto">
                    <div class="col-auto p-0">
                        <span>Services/</span>
                    </div>
                    <div class="col-auto p-0">
                        <p>
                            <?php
                            if (count($resultServ) > 0) {
                                foreach ($resultServ as $name) {
                                    echo $name . "<br>";
                                }
                            } else {
                                echo "";
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 p-0 col-industry col-flex d-flex">
                <div class="row p-0 mx-auto">
                    <div class="col-auto p-0">
                        <span>Industry/</span>
                    </div>
                    <div class="col-auto p-0">
                        <p><?= $projectInd ?></p>
                    </div>
                </div>
            </div>

            <div class="col-4 p-0 col-year col-flex d-flex">
                <div class="row p-0 ms-auto me-0">
                    <div class="col-auto p-0">
                        <span>Year/</span>
                    </div>
                    <div class="col-auto p-0">
                        <p class="p-0 m-0"><?= $projectY ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HERO -->

    <!-- CONTENT -->
    <div class="container-fluid container-content text-prim">
        <div class="row m-0">
            <div class="col-6 d-flex col-flex" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="my-auto">OVERVIEW</h2>
            </div>
            <div class="col-5 my-auto ms-auto">
                <p><?= $projectOv ?></p>
            </div>
            <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                <img src="../img/img_plkm1.png" class="h-100" alt="PLKM website design overview">
            </div>
            <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                <img src="../img/img_plkm2.png" class="h-100" alt="PLKM website design overview">
            </div>
        </div>
    </div>
    <!-- END CONTENT -->

    <!-- FOOTER -->
    <?php include '../component/footer.php'; ?>
    <!-- END FOOTER -->

    <script src="../script/navbar.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>