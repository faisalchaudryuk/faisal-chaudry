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
function get_article_info_HTML($timeStamp, $title, $description, $link) {
    ?>
    <div class="article-info">
      <a href="<?php echo $link ?>" class="fill-div-link"></a>
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
function get_article_cover_HTML($img){
  ?>
  <div class="article-cover-container">
    <div class="article-cover">
      <?php echo file_get_contents($img); ?>
    </div>
  </div>
  <?php
}
?>
<?php function array_category($catalog, $category){
  $output = [];
  foreach ($catalog as $key => $value) {
    if (strtolower($category) == strtolower($value["category"])) {
      $output[] = $value;
    }
  }
  return $output;
}?>
<?php include("inc/header.php"); ?>
<?php include("inc/nav.php"); ?>
<main>
  <div class="category-content">
    <header class="category-header">
      <h1><?php echo $page; ?></h1>
    </header>
    <div class="articles">
      <?php
      $section = array_category($catalog, $page);
      $i = 0;
      foreach ($section as $key => $value) {
        if ($i % 2 == 0):
          get_article_cover_HTML($value["img"]);
          get_article_info_HTML($value["timestamp"], $value["title"], $value["description"], $value["link"]);
        else:
          get_article_info_HTML($value["timestamp"], $value["title"], $value["description"], $value["link"]);
          get_article_cover_HTML($value["img"]);
        endif;
        $i++;
      }?>
    </div>
  </div>
</main>
<?php include("inc/footer.php"); ?>
