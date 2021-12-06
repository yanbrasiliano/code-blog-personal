<?php
  include_once("helpers/url.php");
  include_once("data/posts.php");
  include_once("data/categories.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeEnder - Tec Blog</title>
  <!-- ESTILOS DO PROJETO -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
	</header>	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <a href=" index.php" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt="CodeEnder Blog">
    </a>
    <nav>
      <ul id="navbar">
        <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
        <li><a href="#" class="nav-link">Categories</a></li>
        <li><a href="#" class="nav-link">About</a></li>
        <li><a href="<?= $BASE_URL ?>contact.php" class="nav-link">Contact</a></li>
      </ul>
    </nav>
  </header>