<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <title>Works - Portofolio of Stanley Alexsander Tamboto - Fullstack Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/component.css">
    <link rel="stylesheet" href="styles/works.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    </style>
</head>

<body>
    <!-- HERO -->
    <div class="container-fluid container-content bg-prim p-0">

        <!-- NAVBAR -->
        <?php include 'component/navbar.php'; ?>
        <!-- END NAVBAR -->

        <?php
        include 'koneksi.php';

        $projectNames = [];
        $sql = "SELECT name FROM project";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $projectNames[] = $row['name'];
            }
        } else {
            echo "";
        }

        $koneksi->close();
        ?>

        <!-- LIST -->
        <div class="row bg-prim cover">
            <div class="col-6 p-0 col-dmslib col-flex d-flex" data-aos="fade-up" data-aos-duration="1000">
                <a href="works/dmslib.php" class="my-auto mx-auto link-dmslib">
                    <h3><?= $projectNames[0]; ?></h3>
                </a>
            </div>
            <div class="col-6 p-0 col-plkm col-flex d-flex" data-aos="fade-up" data-aos-duration="1000">
                <a href="works/plkm.php" class="my-auto mx-auto link-plkm">
                    <h3><?= $projectNames[1]; ?></h3>
                </a>
            </div>
            <div class="col-12 p-0 col-nusan col-flex d-flex" data-aos="fade-up" data-aos-duration="1000">
                <a href="works/smks-nusantara.php" class="my-auto mx-auto text-center link-nusan">
                    <h3><?= $projectNames[2]; ?></h3>
                </a>
            </div>
        </div>
        <!-- END LIST -->
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