<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <? include('cms/config/config.php'); ?>
  <? include('includesConfig/metas.php'); ?>
  <? include('includesConfig/css.php'); ?>

</head>

<body>
  <!-- ____________________ NAVBAR ____________________-->
  <? include('includes/navbar.php'); ?>

  <!-- ____________________ BLOG ____________________-->
  <section id="blog-div">
    <div class="container">
      <div class="row col-12 mb-xs-3 mb-md-5">
        <div class="col-7 w-100 m-auto pb-5">
          <h1>Últimas publicações do blog</h1>
        </div>
      </div>
      <div class="row col-12 pr-0">
        <? include('includes/blog-div.php'); ?>
        <? include('includes/blog-div.php'); ?>
        <? include('includes/blog-div.php'); ?>
      </div>
  </section>

   <!-- ____________________ Newsletter ____________________-->
   <? include('includes\newsletter.php'); ?>

  <!-- ____________________ FOOTER ____________________-->
  <? include('includes/footer.php'); ?>

  <!-- JavaScript -->
  <? include('includesConfig/js.php'); ?>
  <!-- Analytics -->
  <? include('includes/analytics.php'); ?>
</body>

</html>