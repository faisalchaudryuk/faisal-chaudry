<?php
// $uri = $_SERVER['REQUEST_URI'];
// $page = "";
// if ($uri == "/about.php") {
//   $page = "about";
// } else if ($uri == "/category.php") {
//   $page = "design";
// }
?>
<div class="main-nav">
  <nav>
    <a href="/"><?php echo file_get_contents("img/nav-logo.svg"); ?></a>
  </nav>
  <nav>
    <a href="category.php?cat=design" <?php if ($page == "design") { echo "class='main-nav-link-active'";} ?> >design</a>
    <a href="category.php?cat=engineering" <?php if ($page == "engineering") { echo "class='main-nav-link-active'";} ?> >engineering</a>
    <a href="category.php?cat=audio" <?php if ($page == "audio") { echo "class='main-nav-link-active'";} ?> >audio</a>
    <a href="about.php" <?php if ($page == "about") { echo "class='main-nav-link-active'";} ?> >about</a>
    <a href="contact.php" <?php if ($page == "contact") { echo "class='main-nav-link-active'";} ?> >contact</a>
  </nav>
</div>
