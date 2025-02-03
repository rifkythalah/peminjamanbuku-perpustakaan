<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <style>
    .header {
        background-color: blue;
    }

    .header .navbar-brand {
        color: white;
    }

    .header .nav-link.text-info {
        color: white !important;
    }

    .header .nav-link.text-info:hover {
        color: greenyellow !important;
    }
    </style>

    <title>About Us</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg header">
        <div class="container">
            <a class="navbar-brand" href="index.php">Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-info" href="index.php">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="login.php">Login</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <section id="blog-header">
        <div class="container">
            <h1 class="text-white">ABOUT US</h1>
        </div>
    </section><br><br>
    <section id="blog-list">
        <main role="main" class="container">
            <div class="row">
                <div class="col-md-9 blog-main">
                    <div class="blog-post">
                        <h2 class="blog-post-title">About Us</h2>
                        <p>Perpustakaan SMA 1 Makmur didirikan pada tahun 1995 atas prakarsa kepala sekolah saat itu,
                            Bapak Widodo. Beliau memiliki visi untuk menjadikan SMA 1 Makmur sebagai sekolah yang unggul
                            dalam bidang akademik dan non-akademik. Salah satu pilar penting untuk mencapai visi
                            tersebut adalah dengan menyediakan sarana prasarana yang memadai, termasuk perpustakaan yang
                            lengkap dan modern.</p>
                        <br>
                        <p>Perpustakaan SMA 1 Makmur tidak hanya berfungsi sebagai tempat untuk meminjam dan membaca
                            buku, tetapi juga sebagai tempat belajar dan berkumpul bagi para siswa. Di perpustakaan
                            terdapat berbagai fasilitas yang mendukung kegiatan belajar, seperti ruang baca yang nyaman,
                            ruang diskusi, dan akses internet gratis.</p>
                        <br>
                        <p>Perpustakaan SMA 1 Makmur telah banyak berkontribusi dalam meningkatkan minat baca dan
                            prestasi belajar siswa. Hal ini terbukti dengan banyaknya siswa SMA 1 Makmur yang meraih
                            prestasi gemilang di berbagai kompetisi akademik.</p>
                    </div><br><br><!-- /.blog-post -->
                </div><!-- /.blog-main -->

                <aside class="col-md-3 blog-sidebar">

                    <div class="p-4">
                        <h4 class="font-italic">Social Media</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ol>
                    </div>
                </aside><!-- /.blog-sidebar -->
            </div><!-- /.row -->
        </main><!-- /.container -->
    </section><br><br>
    <footer class="bg-primary text-dark">
        <div class="container">
            <p class="float-right">
                <a href="#" class="text-white">Back to top</a>
            </p>
            <p>&copy; <b>2023 Perpustakaan SMA 1 Makmur.</b> All rights reserved.</p>
        </div>
    </footer>
</body>

</html>