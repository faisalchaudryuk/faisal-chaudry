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
function get_article_info_HTML($date, $title, $description, $link, $tags) {
    ?>
    <div class="article-info">
      <a href="<?php echo $link ?>" class="fill-div-link"></a>
        <div class="article-info-wrapper">
          <div>
            <p class="article-date grey-text"><?php echo $date; ?></p>
            <h1 class="article-title"><?php echo $title; ?></h1>
          </div>
          <div>
            <p class="article-description"><?php echo $description; ?></p>
            <?php for ($i=0; $i < count($tags) ; $i++) { echo "<p class='article-tag'>".$tags[$i]."</p>"; } ?>
          </div>
        </div>
    </div>
    <?php
}
function get_article_cover_HTML($cover){
  ?>
  <div class="article-cover-container">
    <div class="article-cover" style="background-image: url(<?php echo $cover; ?>")>
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
      foreach ($section as $key => $value) {
          get_article_cover_HTML($value["cover"]);
          get_article_info_HTML($value["date"], $value["title"], $value["description"], $value["link"], $value["tags"]);
      }?>
    </div>
  </div>
</main>
<?php include("inc/footer.php"); ?>
