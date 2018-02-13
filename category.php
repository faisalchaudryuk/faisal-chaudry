<?php
$page = null;
if (isset($_GET["cat"])) {
  if ($_GET["cat"] == "design") {
    $page = "design";
    $pageTitle = "Faisal | Design";
  } else if ($_GET["cat"] == "engineering") {
    $page = "engineering";
    $pageTitle = "Faisal | Engineering";
  } elseif ($_GET["cat"] == "audio") {
    $page = "audio";
    $pageTitle = "Faisal | Audio";
  }
}
function articleInfoHTML() {
    ?>
    <div class="article-info">
      <div class="article-info-wrapper">
        <div>
          <p class="article-timestamp grey-text"><?php echo date('dS M Y'); ?></p>
          <h1 class="article-title">article title</h1>
        </div>
        <div>
          <p class="article-description">article prelude caption. This is a sentence thats constructed just to be long lol. article prelude caption. This is a sentence thats constructed just to be long lol.</p>
          <a href="#" class="article-link">article link</a>
        </div>
      </div>
    </div>
    <?php
}
function articleCoverHTML(){
  ?>
  <div class="article-cover">
    <?php echo file_get_contents("img/faisal_logo_animated.svg"); ?>
  </div>
  <?php
}
?>
<?php include("inc/header.php"); ?>
<?php include("inc/nav.php"); ?>
<main>
  <div class="category-content">
    <header class="category-header">
      <?php echo file_get_contents("img/nav-logo.svg"); ?>
      <h1>category title</h1>
      <h3>category description sentence goes here.</h3>
    </header>
    <div class="articles">
      <?php for($i=0; $i < 10; $i++){ ?>
        <?php if ($i % 2 != 0): ?>
          <?php articleInfoHTML(); ?>
          <?php articleCoverHTML(); ?>
        <?php else: ?>
          <?php articleCoverHTML(); ?>
          <?php articleInfoHTML(); ?>
        <?php endif; ?>
      <?php } ?>
    </div>
  </div>
</main>
<?php include("inc/footer.php"); ?>
