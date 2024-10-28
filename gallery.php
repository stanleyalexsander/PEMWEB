<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <title>Gallery - Portofolio of Stanley Alexsander Tamboto - Fullstack Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/component.css">
    <link rel="stylesheet" href="styles/gallery.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    </style>
</head>

<body>
    <!-- HERO -->
    <div class="container-fluid container-content h-100">

        <!-- NAVBAR -->
        <?php include 'component/navbar.php'; ?>
        <!-- END NAVBAR -->

        <!-- BACK CONTENT -->
        <div class="row back-content text-center m-0">
            <div class="col-12 mt-auto p-0">
            </div>
            <div class="col-12 p-0 my-auto">
                <p class="text-prim">Welcome to the</p>
                <span data-aos="fade-up" data-aos-duration="1000">G</span>
                <span data-aos="fade-up" data-aos-duration="1100">A</span>
                <span data-aos="fade-up" data-aos-duration="1200">L</span>
                <span data-aos="fade-up" data-aos-duration="1300">L</span>
                <span data-aos="fade-up" data-aos-duration="1400">E</span>
                <span data-aos="fade-up" data-aos-duration="1500">R</span>
                <span data-aos="fade-up" data-aos-duration="1600">Y</span>

            </div>
            <div class="col-12 mt-auto p-0 text-prim">
                <div class="row m-0">
                    <div class="col-4 p-0 text-start">
                        <p>ALL THE VISUALS YOU'LL SEE</p>
                    </div>
                    <div class="col-4 p-0 text-center">
                        <p>HAVE BEEN</p>
                    </div>
                    <div class="col-4 p-0 text-end">
                        <p>CRAFTED OR CAPTURED WITH <i class="fa-solid fa-heart text-danger"></i></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END BACK CONTENT -->


        <?php
        include 'koneksi.php';

        $sqlphoto = "SELECT photo FROM gallery";
        $resphoto = $koneksi->query($sqlphoto);

        $sqldesc = "SELECT description FROM gallery";
        $resdesc = $koneksi->query($sqldesc);

        $koneksi->close();

        $resphotos = [];
        $resdescs = [];

        if ($resphoto->num_rows > 0) {
            while ($rowp = $resphoto->fetch_assoc()) {
                $resphotos[] = $rowp["photo"];
            }
        }

        if ($resdesc->num_rows > 0) {
            while ($rowd = $resdesc->fetch_assoc()) {
                $resdescs[] = $rowd["description"];
            }
        }

        ?>


        <!-- PHOTOS -->
        <div class="row content text-center m-0">
            <!-- GROUP 1 -->
            <div class="col-4 p-0 rounded border" data-aos="slide-right" data-aos-duration="1000">
                <img src="img/gallery/<?= $resphotos[0] ?>" alt="<?= $resdescs[0] ?>" class="rounded">
            </div>
            <div class="col-4 p-0 rounded border" data-aos="slide-up" data-aos-duration="1200">
                <img src="img/gallery/<?= $resphotos[1] ?>" alt="<?= $resdescs[1] ?>" class="rounded">
            </div>

            <!-- GROUP 2 -->
            <div class="col-4 p-0 rounded border mx-auto" data-aos="slide-right" data-aos-duration="1000">
                <img src="img/gallery/<?= $resphotos[2] ?>" alt="<?= $resdescs[2] ?>" class="rounded">
            </div>
            <div class="col-4 p-0 rounded border mx-auto" data-aos="slide-left" data-aos-duration="1200">
                <img src="img/gallery/<?= $resphotos[3] ?>" alt="<?= $resdescs[3] ?>" class="rounded">
            </div>

            <!-- GROUP 3 -->
            <div class="col-4 p-0 rounded border ms-auto" data-aos="slide-up" data-aos-duration="1000">
                <img src="img/gallery/<?= $resphotos[4] ?>" alt="<?= $resdescs[4] ?>" class="rounded">
            </div>
            <div class="col-4 p-0 rounded border me-auto" data-aos="slide-up" data-aos-duration="1200">
                <img src="img/gallery/<?= $resphotos[5] ?>" alt="<?= $resdescs[5] ?>" class="rounded">
            </div>

            <!-- GROUP 4 -->
            <div class="col-4 p-0 rounded border me-auto" data-aos="slide-right" data-aos-duration="1000">
                <img src="img/gallery/<?= $resphotos[6] ?>" alt="<?= $resdescs[6] ?>" class="rounded">
            </div>
            <div class="col-4 p-0 rounded border ms-auto" data-aos="slide-left" data-aos-duration="1200">
                <img src="img/gallery/<?= $resphotos[7] ?>" alt="<?= $resdescs[7] ?>" class="rounded">
            </div>

            <!-- GROUP 5 -->
            <div class="col-4 p-0 rounded border ms-auto" data-aos="slide-up" data-aos-duration="1000">
                <img src="img/gallery/<?= $resphotos[8] ?>" alt="<?= $resdescs[8] ?>" class="rounded">
            </div>
            <div class="col-4 p-0 rounded border" data-aos="slide-left" data-aos-duration="1200">
                <img src="img/gallery/<?= $resphotos[9] ?>" alt="<?= $resdescs[9] ?>" class="rounded">
            </div>

            <!-- GROUP 6 -->
            <div class="col-4 p-0 rounded border me-auto" data-aos="slide-right" data-aos-duration="1000">
                <img src="img/gallery/<?= $resphotos[10] ?>" alt="<?= $resdescs[10] ?>" class="rounded">
            </div>

        </div>
        <!-- END PHOTOS -->
    </div>
    <!-- END HERO -->

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