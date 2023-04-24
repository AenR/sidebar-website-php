<?php include_once 'main/header.php'; ?>

<?php

if (isset($_GET['route'])) {
  $pages = 'pages/'.strtolower($_GET['route']).'.php';
} else { $pages = null; }

if (file_exists($pages)) {
  include_once $pages;
} else { include_once 'pages/index.php'; }

?>

<?php include_once 'main/footer.php'; ?>