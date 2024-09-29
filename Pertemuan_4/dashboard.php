<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .col-gambar img {
            max-width: 200px;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="nav bg-dark py-2 px-2 mb-4">
        <a class="nav-link text-light" href="home.html">Home</a>
        <a class="nav-link text-light" href="tentang.html">About</a>
    </nav>
    <!-- END NAVBAR -->

    <!-- CONTAINER -->
    <div class="container-fluid px-4">

        <h1 class="mb-4">Berita Terkini</h1>
        
        <?php
        for ($i=0; $i<=1; $i++) {
            echo '
            <!-- CARD BERITA -->
            <div class="row mb-4">
                <div class="col-auto col-gambar">
                    <img src="kapal.jpg">
                </div>
                <div class="col col-text">
                    <h3>Judul '.($i + 1).'</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel velit suscipit, euismod mi non,
                        facilisis est. Fusce consequat scelerisque ipsum, sed luctus libero venenatis et. Praesent molestie,
                        sem
                        a lobortis volutpat, mauris lorem euismod risus, id condimentum nisi velit vitae neque. Nulla
                        ullamcorper ligula eget sagittis volutpat. In quam nulla, viverra at viverra tempus, pharetra quis
                        ex.
                        In hac habitasse platea dictumst. Proin lorem felis, consequat semper malesuada ac, euismod sit amet
                        arcu.</p>
                    <a href="detilberita1.html">Selengkapnya</a>
                </div>
                <hr class="my-4">
            </div>
            <!-- END CARD BERITA -->
            ';
        }

        ?>
    </div>
    <!-- END CONTAINER -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

<footer class="bg-dark px-2">
    <!-- FOOTER -->
    <ul class="text-light py-3">
        <li><a href="https://google.com" target="_blank" class="text-light">Google</a></li>
        <li><a href="https://microsoft.com" target="_blank" class="text-light">Microsoft</a></li>
    </ul>
    <!-- END FOOTER -->
</footer>

</html>