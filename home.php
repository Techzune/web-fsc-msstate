<?php
$_PAGE["title"] = "Home";
include "inc/baseHTML.php";
?>

<?php startblock("content") ?>

<div class="jumbotron">
  <div class="text-center justify-content-center">
    <h1 class="display-4">Celebrating over 40 years!</h1>
  </div>
</div>

<div class="justify-content-center text-center">

  <div class="card w-75 mx-auto">
    <div class="card-body">
      <h3 class="card-title">About Us</h3>
      <div class="card-text">
        The MSU Food Science Club is a student organization of the Institute of Food Technologists in
        the Department of Food Science, Nutrition and Health Promotion. his organization consists of students
        who are eager to learn more about their roles in the food industry.
      </div>
    </div>
  </div>

  <div class="card w-75 mx-auto mt-4">
    <div class="card-body">
      <h3 class="card-title">Gift Boxes</h3>
      <div class="card-text">
        Proceeds from the gift boxes  support activities of the Food Science Club, which includes sending students
        to both local and national meetings of the Institute of Food Technologists, recruiting and sponsoring programs
        of interest. We would like to thank our loyal friends for your support given to us over the years.
        We sincerely appreciate your support and hope you enjoy our Mississippi products. In order for our
        club to support you promptly, please note the shipping and pickup dates.
        <br/><br/>
        Orders may be picked up in James E. Garrison Sensory Evaluation Laboratory.
      </div>
      <a href="/giftboxes" class="btn btn-dark mt-3">Order now!</a>
    </div>
  </div>

</div>

<?php endblock() ?>
