<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/slick.css">
<!--    <link rel="stylesheet" href="css/slick-theme.css">-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
</head>
<body>
  <!--
  <div class="container">
    <div class="row">
      <div class="one-half column">

    </div>
  </div> -->

  <?php include('parts/header.php'); ?>
  <?php include('parts/main_page.php'); ?>
  <?php include('parts/footer.php'); ?>

  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/responsiveCarousel.min.js"></script>
  <script src="js/slick.min.js"></script>

  <script src="dist/slideout.min.js"></script>

  <script>
      $(document).on('ready', function() {

          $(".header-slider-list").slick({
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              prevArrow: null,
              nextArrow: null
          });

          $('.header-slick-previous').click(function () {
              $(".header-slider-list").slick('slickPrev');
          });
          $('.header-slick-next').click(function () {
              $(".header-slider-list").slick('slickNext');
          })


      });




  </script>

</body>
</html>
