<?php
$uri = $_SERVER['REQUEST_URI'];
$page = "";
if ($uri == "/about.php") {
  $page = "about";
} else if ($uri == "/category.php") {
  $page = "design";
}
?>
<div class="main-nav">
  <nav>
    <a href="/"><?php echo file_get_contents("img/nav-logo.svg"); ?></a>
  </nav>
  <nav>
    <a href="category.php" <?php if ($page == "design") { echo "class='main-nav-link-active'";} ?> >design</a>
    <a href="#">engineering</a>
    <a href="#">audio</a>
    <a href="about.php" <?php if ($page == "about") { echo "class='main-nav-link-active'";} ?> >about</a>
    <a href="#">contact</a>
  </nav>
</div>
