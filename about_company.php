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

  <?php include('parts/header-common.php'); ?>
  <?php include('parts/about_company.php'); ?>
  <?php include('parts/footer.php'); ?>

  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/responsiveCarousel.min.js"></script>


  <script>
      $(document).ready(function () {
          $(function () {
              $('.crsl-items').carousel({
                  visible: 3,
                  itemMinWidth: 180,
                  itemEqualHeight: 370,
                  itemMargin: 10
              });

              $("a[href=#]").on('click', function (e) {
                  e.preventDefault();
              });
          });
      });


  </script>

</body>
</html>
