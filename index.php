<?php
$pageTitle = "Faisal Chaudry";
?>
<?php include("inc/header.php"); ?>
<main>
  <div class="main-content">
      <div class="home-intro">
        <div class="home-intro-content">
          <div class="heading">
            <h1>the living portfolio of <span class="grey-text"><a href="about.php">faisal chaudry</a></span>.</h1>
            <p>a record of my thoughts &amp; work in <a href="category.php?cat=design">design</a>, <a href="category.php?cat=engineering">engineering</a> &amp; <a href="category.php?cat=audio">audio</a>.</p>
          </div>
        </div>
      </div>
      <div class="home-banner">
        <div class="logo">
          <div class="logo-outline">
            <?php echo file_get_contents("img/faisal_logo_animated.svg"); ?>
          </div>
          <div class="logo-fill">
            <?php echo file_get_contents("img/faisal_logo_fill.svg"); ?>
          </div>
        </div>
      </div>
  </div>
</main>
<?php include("inc/footer.php"); ?>
