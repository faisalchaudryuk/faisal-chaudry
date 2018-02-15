<?php include("inc/data.php"); ?>
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
function articleInfoHTML($timeStamp, $title, $description, $link) {
    ?>
    <div class="article-info">
      <div class="article-info-wrapper">
        <div>
          <p class="article-timestamp grey-text"><?php echo $timeStamp; ?></p>
          <h1 class="article-title"><?php echo $title; ?></h1>
        </div>
        <div>
          <p class="article-description"><?php echo $description; ?></p>
          <a href="<?php echo $link; ?>" class="article-link"><?php echo $title; ?></a>
        </div>
      </div>
    </div>
    <?php
}
function articleCoverHTML($img){
  ?>
  <div class="article-cover-container">
    <div class="article-cover">
      <?php echo file_get_contents($img); ?>
    </div>
  </div>
  <?php
}
?>
<?php include("inc/header.php"); ?>
<?php include("inc/nav.php"); ?>
<main>
  <div class="category-content">
    <header class="category-header">
      <h1><?php echo $page; ?></h1>
      <h3>category description sentence goes here.</h3>
    </header>
    <div class="articles">
      <?php $i = 0; ?>
      <?php foreach ($catalog as $id => $item) {
        if ($i % 2 != 0):
          articleInfoHTML($item["timestamp"], $item["title"], $item["description"], $item["link"]);
          articleCoverHTML($item["img"]);
        else:
          articleCoverHTML($item["img"]);
          articleInfoHTML($item["timestamp"], $item["title"], $item["description"], $item["link"]);
        endif;
        $i++;
      }?>
    </div>
  </div>
</main>
<?php include("inc/footer.php"); ?>
