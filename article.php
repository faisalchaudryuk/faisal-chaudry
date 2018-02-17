<?php
include("inc/data.php");

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  if (isset($catalog[$id])) {
    $article = $catalog[$id];
  }
}

$page = "article";
$pageTitle = "Faisal | " . $article["title"];

?>
<?php include("inc/header.php"); ?>
<?php include("inc/nav.php"); ?>
<main>
  <div class="main-content">
    <h1><?php echo $article["title"]; ?></h1>
  </div>
</main>
<?php include("inc/footer.php"); ?>
