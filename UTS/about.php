<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <title>About me - Portofolio of Stanley Alexsander Tamboto - Fullstack Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/component.css">
    <link rel="stylesheet" href="styles/about.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    </style>
</head>

<body>
    <div class="container-fluid container-content">

        <!-- NAVBAR -->
        <?php include 'component/navbar.php'; ?>
        <!-- END NAVBAR -->

        <!-- HERO -->
        <div class="row cover m-0 text-prim">
            <div class="col-12 p-0 col-flex d-flex" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="mt-auto">NICE TO SEE YOU!</h3>
            </div>
            <div class="col-12 p-0 text-end" data-aos="fade-up" data-aos-duration="1500">
                <h3>
                    LET ME TELL YOU <br>
                    A BIT MORE ABOUT ME
                </h3>
            </div>
            <div class="col-auto p-0 ms-auto text-end">
                <p><i>SCROLL TO EXPLORE</i>
                </p>
            </div>
        </div>
        <!-- END HERO -->

        <!-- ABOUT -->
        <div class="container-fluid container-about p-0 text-prim">
            <div class="row p-0">
                <div class="col-12 m-0" data-aos="fade-up" data-aos-duration="1000">
                    <p class="text-about">Hi, I’m Stanley Alexsander Tamboto, but you <br>
                        can call me Stanley. I am currently a 5th- <br>
                        semester student at Pembangunan <br>
                        Jaya University, majoring in Informatics.
                        <br><br>
                        I have experience working as a full-stack <br>
                        developer, mostly through freelance projects, <br>
                        with a stronger focus on UI/UX Design and <br>
                        Frontend development.
                        <br><br>
                    </p>
                </div>
                <div class="col-12 m-0 text-end" data-aos="fade-up" data-aos-duration="1000">
                    <p class="text-about">
                        I’m capable of working independently or as part <br>
                        of a team when needed. Since I mostly work <br>
                        independently, I’m also capable of handling <br>
                        backend development and database management.
                        <br><br>
                        Besides my work experience, I also have a passion for <br>
                        photographing vintage architecture and fashion <br>
                        with a vintage touch.
                    </p>
                </div>
            </div>
        </div>
        <!-- END ABOUT -->
    </div>

    <?php
    include 'koneksi.php';

    $categories = ['Design', 'Develop', 'Other', 'Tools'];
    $dataDes = [];

    foreach ($categories as $category) {
        $sql = "SELECT name FROM skills WHERE category = '$category'";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dataDes[$category][] = $row["name"];
            }
        } else {
            $dataDes[$category] = [];
        }
    }

    $koneksi->close();
    ?>

    <div class="container-fluid container-about container-list bg-prim">
        <div class="row content-padding text-clean">
            <div class="col-6 mx-0 my-auto p-0" data-aos="fade-up" data-aos-duration="1000">
                <h3>I CAN HELP <br>
                    YOU WITH</h3>
            </div>

            <div class="col-6 col-flex d-flex flex-column p-0">
                <div class="row p-0 my-auto me-auto">
                    <!-- Section Design -->
                    <div class="d-flex align-items-start p-0" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-3 p-0">
                            <span>Design/</span>
                        </div>
                        <div class="col-4 p-0">
                            <p class="p-0 m-0">
                                <?php
                                foreach ($categories as $category) {
                                    if ($category == "Design" && !empty($dataDes[$category])) {
                                        foreach ($dataDes[$category] as $name) {
                                            echo $name . "<br>";
                                        }
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>

                    <!-- Section Develop -->
                    <div class="d-flex align-items-start mt-5 p-0" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-3 p-0">
                            <span>Develop/</span>
                        </div>
                        <div class="col-4 p-0">
                            <p class="p-0 m-0">
                                <?php
                                foreach ($categories as $category) {
                                    if ($category == "Develop" && !empty($dataDes[$category])) {
                                        foreach ($dataDes[$category] as $name) {
                                            echo $name . "<br>";
                                        }
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>

                    <!-- Section Other -->
                    <div class="d-flex align-items-start mt-5 p-0" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-3 p-0">
                            <span>Other/</span>
                        </div>
                        <div class="col-4 p-0">
                            <p class="p-0 m-0">
                                <?php
                                foreach ($categories as $category) {
                                    if ($category == "Other" && !empty($dataDes[$category])) {
                                        foreach ($dataDes[$category] as $name) {
                                            echo $name . "<br>";
                                        }
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row content-padding text-clean">
            <div class="col-6 mx-0 my-auto p-0" data-aos="fade-up" data-aos-duration="1000">
                <h3>
                    I USE <br>
                    THESE TOOLS <br>
                    TO WORK
                </h3>
            </div>

            <div class="col-6 col-flex d-flex flex-column p-0">
                <div class="row p-0 my-auto me-auto">
                    <div class="d-flex align-items-start p-0" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-4 p-0">
                            <p class="p-0 m-0">
                                <?php
                                foreach ($categories as $category) {
                                    if ($category == "Tools" && !empty($dataDes[$category])) {
                                        foreach ($dataDes[$category] as $name) {
                                            echo $name . "<br>";
                                        }
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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