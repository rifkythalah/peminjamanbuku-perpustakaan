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

      <title>Blog</title>
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
    <section id="blog-header">
      <div class="container">
        <h1 class="text-white">BLOG</h1>
      </div>
    </section><br><br>
    <section id="blog-list">
      <main role="main" class="container">
        <div class="row">
          <div class="col-md-9 blog-main">
            <div class="blog-post">
              <h2 class="blog-post-title"><a href="detailBuku.php">Sinopsis Novel Laskar Pelangi</a></h2>
              <p class="blog-post-meta">January 29, 2024 by <a href="#">Andrea Hinata</a></p>
      
              <p>Buku ini menceritakan tentang perjuangan Bu Muslimah dan Pak Harfan, dua orang guru yang memiliki dedikasi tinggi dalam dunia pendidikan, dimana dengan usaha dan kesungguhannya mereka berdua berhasil memajukan pendidikan di desa Gantong satu desa terpencil di pilau Balitong.</p>
                <a href="detailBuku.php" class="btn btn-primary stretched-link">Continue reading..</a>
            </div><!-- /.blog-post --><br><br>
            <div class="blog-post">
              <h2 class="blog-post-title"><a href="detailBuku2.php">Novel Earth</a></h2>
              <p class="blog-post-meta">Nov 11, 2023 by <a href="#">David Brin</a></p>
      
              <p>Earth adalah sebuah novel fiksi ilmiah tahun 1990 karya penulis Amerika David Brin. Buku tersebut dinominasikan untuk Penghargaan Hugo dan Penghargaan Locus pada 1991.</p>
              <a href="detailBuku2.php" class="btn btn-primary stretched-link">Continue reading..</a>
            </div><!-- /.blog-post --><br><br>
      
            <nav class="blog-pagination">
              <a class="btn btn-outline-primary" href="#">Older</a>
              <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>
      
          </div><!-- /.blog-main -->
      
          <aside class="col-md-3 blog-sidebar">      
          <div class="p-4">
              <h4 class="font-italic">Categories</h4>
              <ol class="list-unstyled mb-0">
              <li><a href="detailblog.php">Sipnosis</a></li>
                <li><a href="detailBuku2.php">Novel</a></li>
                <li><a href="#">Komik</a></li>
                <li><a href="#">Ilmu Pengetahuan</a></li>
            </div>
      
            <div class="p-4">
              <h4 class="font-italic">Archives</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="#">March 2014</a></li>
                <li><a href="#">February 2014</a></li>
                <li><a href="#">January 2014</a></li>
                <li><a href="#">December 2013</a></li>
                <li><a href="#">November 2013</a></li>
                <li><a href="#">October 2013</a></li>
                <li><a href="#">September 2013</a></li>
                <li><a href="#">August 2013</a></li>
                <li><a href="#">July 2013</a></li>
                <li><a href="#">June 2013</a></li>
                <li><a href="#">May 2013</a></li>
                <li><a href="#">April 2013</a></li>
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
          <p>&copy; <b>2023 Perpustakaan SMA 1 Makmur</b> All rights reserved.</p>
        </div>
    </footer>

  </body>
</html>