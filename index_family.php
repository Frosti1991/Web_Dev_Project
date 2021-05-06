<?php
$name = $_GET["name"];
$typ = $_GET["typ"];
?>

<!doctype html>
<html lang="en">

<head>
  <title>Startseite Family</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Bootstrap Icons-Stylesheet -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/app_self.css">

</head>

<body>

  <nav id="mainNavbar" class="navbar navbar-dark  navbar-expand-md py-0 sticky-top">
    <a href="#" class="navbar-brand">START</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLinks"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navLinks">
      <ul class="navbar-nav">
        <li class="nav-item dropdown show">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">RÄTSEL</a>
          <ul class="dropdown-menu text-start border-0 p-0" aria-labelledby="navbarDropdown">
            <a href=<?php echo 'raetsel_family.php?name='.$name.'&typ='.$typ."#Rätsel1"; ?> class="dropdown-item">Rätsel #1</a>
            <a href=<?php echo 'raetsel_family.php?name='.$name.'&typ='.$typ."#Rätsel2"; ?> class="dropdown-item">Rätsel #2</a>
            <a href=<?php echo 'raetsel_family.php?name='.$name.'&typ='.$typ."#Rätsel3"; ?> class="dropdown-item">Rätsel #3</a>
            <a href=<?php echo 'raetsel_family.php?name='.$name.'&typ='.$typ."#Rätsel4"; ?> class="dropdown-item">Rätsel #4</a>
            <a href=<?php echo 'raetsel_family.php?name='.$name.'&typ='.$typ."#Rätsel5"; ?> class="dropdown-item">Rätsel #5</a>
            <a href=<?php echo 'raetsel_family.php?name='.$name.'&typ='.$typ."#Rätsel6"; ?> class="dropdown-item">Rätsel #6</a>
          </ul>
        </li>
        <li class="nav-item">
          <a href=<?php echo 'raetsel_family.php?name='.$name.'&typ='.$typ."Loesung"; ?> class="nav-link">LÖSUNG</a>
        </li>
      </ul>
    </div>
  </nav>

  <section class="container-fluid px-0">
    <div class="row align-items-center">
      <div class="col-xl-6 mb-5">
        <div id="headingGroup" class="text-white text-center d-none d-lg d-block mt-5">
          <h1 class="">JETZT<span>/</span>WIRD´S<span>/</span> IRRE!</h1>
          <h1 class="text-dange">30.</h1>
          <h1 class="">JETZT<span>/</span>WIRD´S<span>/</span> IRRE!</h1>
          <h1 class="text-dange">GEBURTSTAG</h1>
          <h1 class="">JETZT<span>/</span>WIRD´S<span>/</span> IRRE!</h1>
          <h1 class="text-dange">JUHU!</h1>
          <h1 class="">JETZT<span>/</span>WIRD´S<span>/</span> IRRE!</h1>
        </div>
      </div>
      <div class="col-xl-6 text-center">
        <img class="img-fluid" src="imgs/birthday_lego.jfif" alt="Geburtstags-Männel">
      </div>
    </div>
  </section>

  <section class="container-fluid px-0">
    <div class="row align-items-center ZeileContent">
      <div class="col-xl-6 order-2 order-xl-1">
        <img class="img-fluid" src="imgs/brett-jordan-07vc-HBRk0c-unsplash.jpg" alt="Herrliche Milch!">
      </div>
      <div class="col-xl-6 text-center order-1 order-xl-2">
        <div class="row justify-content-center">
          <div class="col-10  inhalt mb-5 ">
            <h2>ULTIMATIVER RÄTSELSPASS!</h2>
            <div class="p-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="15%" height="15%" fill="currentColor"
                class="d-none d-lg-inline bi bi-question-square text-white" viewBox="0 0 16 16">
                <path
                  d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path
                  d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
              </svg>
            </div>
            <p class="lead">
              Hallo liebe Geburtstags-Gäste! Ihr seid auf meiner kleinen Geburtstags-Homepage gelandet. Sehr schön. Doch
              die offizielle Einladung müsst ihr euch erst noch verdienen! Da ich ein großer Rätsel-Fan bin, müsst ihr 6
              Fragen beantworten, bevor ihr die Einladung bekommt! Ich glaub an euch! Viel Spaß!
            </p>
            <form action="raetsel_family.php#Rätsel1">
                <input type="hidden" name="name" value=<?php echo $name;?> ></input>
                <input type="hidden" name="typ" value=<?php echo $typ;?> ></input>
                <button class="btn btn-outline-primary btn-lg">Zum Rätsel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid px-0 my-3">
    <div class="row  align-items-center ZeileContent">
      <div class="col-xl-6 text-center ">
        <div class="row justify-content-center">
          <div class="col-10  inhalt mb-5 ">
            <h2>Lösung</h2>
            <div class="p-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="15%" height="15%" fill="currentColor"
                class="d-none d-lg-inline bi bi-exclamation-square text-white" viewBox="0 0 16 16">
                <path
                  d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path
                  d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
              </svg>
            </div>
            <p class="lead">
              Wenn ihr denkt, alle Rätsel richtig beantwortet zu haben, dann könnt ihr hier eure Lösung eingeben!
            </p>
            <form action="./raetsel_family.php" method="GET">
              <input type="hidden" name="name" value=<?php echo $name;?> ></input>
              <input type="hidden" name="typ" value=<?php echo $typ;?> ></input>
              <button type="submit" class="btn btn-outline-primary btn-lg">Zur Lösung</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-xl-6 ">
        <img class="img-fluid" src="imgs/IMAG0052.jpg" alt="Herrliche Milch!">
      </div>
    </div>
  </section>

  <section class="container-fluid footer p-3 mt-0 ">
    <div class="row justify-content-center align-items-center text-center">
      <div class="col-md-4 text-xl-start "> Designed by Chrissi</div>
      <div class="col-md-4 "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
          class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
          <path
            d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z" />
        </svg>
      </div>
      <div class="col-md-4 "> Powered by Tom Ziegler and Chrissi</div>
    </div>
  </section>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
    crossorigin="anonymous"></script>
  <script src="js/vendor.js"></script>
  <script src="js/bootstrap_tom.js"></script>
  <script src="js/app_tom.js"></script>
  <script>
    $(function () {
      $(document).scroll(function () {
        var $nav = $("#mainNavbar");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
      });
    });
  </script>

</body>

</html>