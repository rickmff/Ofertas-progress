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

  <section id="header-title">
		<div class="container">
			<span><a href="#">Home</a> / Blog</a></span>
			<div class="d-flex w-100 justify-content-center">
				<img class="icone-regiao img-fluid mr-3" src="assets\image\icon-regiao.png" />
				<h1>Blog</h1>
			</div>
			<div class="header-title-seta">
				<img class="img-fluid" src="assets\image\seta.png" alt="">
			</div>
		</div>
	</section>

  <!-- ____________________ BLOG ____________________-->
  <section id="blog-div">
    <div class="container">
      <div class="row col-12 pr-0">
        <? include('includes/blog-div.php'); ?>
        <? include('includes/blog-div.php'); ?>
        <? include('includes/blog-div.php'); ?>
      </div>
  </section>

   <!-- ____________________ Newsletter ____________________-->
   <? include('includes/newsletter.php'); ?>

  <!-- ____________________ FOOTER ____________________-->
  <? include('includes/footer.php'); ?>

  <!-- JavaScript -->
  <? include('includesConfig/js.php'); ?>
  <!-- Analytics -->
  <? include('includes/analytics.php'); ?>
</body>

</html>