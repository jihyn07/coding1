<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Code Memo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.5.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php">Code Memo</a></h1>
        <!-- <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div> -->
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Code Home</span></a></li>
          <li><a href="#codeMemo"><i class="bx bx-envelope"></i> Code Memo</a></li>
          <li><a href="#codeHistory"><i class="bx bx-file"></i> <span>Code History</span></a></li>
          <?php 
            require ('_conn.php');
            $sqllist = "SELECT * FROM `codememo`";
            $result = mysqli_query($conn, $sqllist);
            foreach($result as $value) {
          ?>

          <li><a href="#list<?=$value['no'];?>"> &nbsp;  &nbsp;  &nbsp; <i class="bx bx-file-blank"></i> <span><?=$value['subject'];?></span></a></li>

          <?php
            }
          ?>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Code Memo</h1>
      <h1>00:00:00</h1>
      <p>Type: <span class="typed" data-typed-items="Python, Javascript, PHP, Etc"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= 코드메모 Section ======= -->
    <section id="codeMemo" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Code Memo</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="_write.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Type</label>
                <select class="form-control" name="type" id="type">
                  <option value="Python">Python</option>
                  <option value="Javascript">Javascipt</option>
                  <option value="PHP">PHP</option>
                  <option value="Etc">Etc</option>
                </select>

                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label for="name">Content</label>
                <textarea class="form-control" name="content" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
              </div>
              <div class="text-center"><button type="submit">Send</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End 코드메모 Section -->


    <!-- ======= 코드리스트 Section ======= -->
    <section id="codeHistory" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Code Histroy</h2>
        </div>

        <div class="row">
          <div class="col-lg-12" data-aos="fade-up">

            <!-- * 코드 히스토리 리스트 시작 -->
            <?php
              require ('_conn.php');
              $sqlload = "SELECT * FROM `codememo`";
              $result = mysqli_query($conn, $sqlload);
              foreach($result as $v) {
            ?>

            <h3 class="resume-title" id="list<?=$v['no'];?>">
              <?=$v['subject'];?>
              <button class="btn-danger" onclick="location.href='_delete.php?no=<?=$v['no'];?>';">DELETE</button>
              <button class="btn-secondary" onclick="copy('#<?=$v['no'];?>')">COPY</button>
            </h3>

            <div class="resume-item pb-0">
              <h4>Type: <?php echo $v['type'];?></h4>
              <!-- pre : 탭 적용 -->
              <p><em><pre id="<?=$v['no'];?>"><?=$v['content'];?></pre></em></p>
            </div>

            <?php
              }
            ?>
            <!-- * 코드 히스토리 리스트 끝 -->

          </div>
        </div>

      </div>
    </section><!-- End 코드리스트 Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="copy.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>