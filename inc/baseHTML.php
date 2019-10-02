<?php
include "base.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<script src="/lib/js/jquery-3.4.1.min.js"></script>
<script src="/lib/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="/lib/css/site.css"/>

<head>
  <meta charset="UTF-8">
  <title>
    <?= $_PAGE["title"] ?> | FSC
  </title>
</head>


<body>

<!-- Navigation Bar -->
<?php include "baseNavigationBar.php"; ?>

<!-- Content that is outside the "main" container -->
<?php emptyblock("content-top") ?>

<div class="container pt-4">
  <!-- "Main" container content -->
  <?php emptyblock("content") ?>
</div>

<hr class="my-4"/>

<div class="text-center">
  <p class="text-muted">
    Official website of the Mississippi State University Food Science Club
  </p>
  <img src="/img/FSNHP_web.png"
       alt="Department of Food Science, Nutrition, and Health Promotion"
       style="max-width: 20rem;"
       class="my-2"
  />
</div>

</body>
</html>
