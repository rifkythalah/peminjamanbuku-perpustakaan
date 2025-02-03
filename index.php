<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <style>
        .header {
            background-color: blue;
        }
        .header .navbar-brand{
            color: white; 
        }
        .header .nav-link.text-info {
            color: white !important;
        }
        .header .nav-link.text-info:hover {
            color: greenyellow !important;
        }
    </style>

    <title>Perpustakaan</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg header">
        <div class="container">
            <a class="navbar-brand" href="index.php">Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
    <section id="carousel-item">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/slider1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Selamat Datang</h3>
                  <p>Dunia Pengetahuan Menanti Anda</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slider2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Temukan Jutaan Buku</h3>
                  <p>Membuka Cakrawala Pengetahuan Bersama Perpustakaan</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slider3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Lebih Dari Sekedar Buku</h3>
                  <p>Temukan inspirasi di Perpustakaan SMA 1 Makmur</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section id="notes-item">
        <div class="container">
            <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">Selamat Datang di <span class="text-muted">Perpustakaan SMA 1 Makmur</span></h2>
                  <br>
                  <p class="lead">Selamat datang di Perpustakaan SMA 1 Makmur, tempat di mana pengetahuan dan imajinasi bertemu. Kami berdedikasi untuk mendukung keberhasilan akademis dan pertumbuhan intelektual siswa kami melalui koleksi buku yang luas, sumber daya digital, dan lingkungan belajar yang kondusif.</p>
                </div>
                <div class="col-md-5">
                    <img src="img/buku.jpg" class="img-fluid mx-auto featurette-image">
                </div>
            </div>
            <hr class="featurette-divider"> 
        </div>
    </section>
    <section id="blog-item" class="mb-4">
        <div class="container">
            <h2>Buku Terbaru</h2><br>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static bg-light">
                        <strong class="d-inline-block mb-2 text-success">Sipnosis</strong>
                        <h3 class="mb-0"><a href="detailBuku.php">Laskar Pelangi</a></h3>
                        <div class="mb-1 text-muted">January 29, 2024</div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="img/blog.png" class="img-fluid" title="book title here">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static bg-light">
                        <strong class="d-inline-block mb-2 text-success">Novel</strong>
                        <h3 class="mb-0"><a href="detailBuku2.php">Earth</a></h3>
                        <div class="mb-1 text-muted">Nov 11, 2023</div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="img/novel1.jpg" width="178px"class="img-fluid" title="book title here">
                        </div>
                    </div>
                </div>
    </section>
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