<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <title>Contact - Portofolio of Stanley Alexsander Tamboto - Fullstack Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/component.css">
    <link rel="stylesheet" href="styles/contact.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    </style>
</head>

<body>
    <div class="container-fluid container-content bg-prim">

        <!-- NAVBAR -->
        <?php include 'component/navbar.php'; ?>
        <!-- END NAVBAR -->

        <!-- CONTACT -->
        <div class="row cover m-0">
            <p class="text-clean text-center" data-aos="fade-up" data-aos-duration="1000">Fill the form and i'll get back to you</p>
            <form action="insert.php" method="POST" class="p-0" data-aos="fade-up" data-aos-duration="1300">
                <div class="row mx-auto">
                    <div class="col-5 p-0">
                        <input type="text" name="fname" class="form-control bg-transparent p-0" id="inputName" placeholder="Full Name">
                    </div>
                    <div class="col-5 p-0 ms-auto">
                        <input type="email" name="email" class="form-control bg-transparent p-0" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="col-12 p-0">
                        <div class="form-floating">
                            <textarea name="message" class="form-control bg-transparent p-0" placeholder="Tell me more about you and your project !" id="floatingTextarea" style="height: 192px"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="bg-transparent border-0 p-0 w-auto mx-auto" data-aos-duration="1500"><u>SEND MESSAGE</u></button>
                </div>
            </form>

        </div>
        <!-- END CONTACT -->

        <!-- Success Modal -->
        <div class="modal modal-lg fade w-100" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered py-5">
                <div class="modal-content">
                    <div class="modal-header m-0">
                        <button type="button" class="btn-close my-auto ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center py-5">
                        <h3 class="p-0 mb-5 text-success">Success !</h3>
                        <p>Your message has been delivered.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fail Modal -->
        <div class="modal modal-lg fade w-100" id="failModal" tabindex="-1" aria-labelledby="failModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered py-5">
                <div class="modal-content">
                    <div class="modal-header m-0">
                        <button type="button" class="btn-close my-auto ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center py-5">
                        <h3 class="p-0 mb-5 text-danger">Oops :'(</h3>
                        <p>Your message can't be delivered.</p>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $showModal = isset($_GET['success']) && $_GET['success'] == 1;
        $noShowModal = isset($_GET['success']) && $_GET['success'] == 0;
        ?>

    </div>

    <!-- FOOTER -->
    <?php include 'component/footer.php'; ?>
    <!-- END FOOTER -->
    <script src="script/navbar.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $(document).ready(function() {
            <?php if ($showModal): ?>
                $('#successModal').modal('show');
            <?php elseif ($noShowModal): ?>
                $('#failModal').modal('show');
            <?php endif; ?>
        });
    </script>
</body>

</html>