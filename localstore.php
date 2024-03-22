<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">Local </span>Stores
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>


  <?php



$get_store = "select * from store";

$run_store = mysqli_query($con,$get_store);

while($row_store = mysqli_fetch_array($run_store)){

$store_id = $row_store['store_id'];

$store_title = $row_store['store_title'];

$store_image = $row_store['store_image'];

$store_desc = substr($row_store['store_desc'],0,400);

$store_button = $row_store['store_button'];

$store_url = $row_store['store_url'];


?>

<div class="col-lg-4 col-md-4"><!-- col-lg-4 col-md-4 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title" align="center">

<?php echo $store_title; ?>

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->



<br>

<p><?php echo $store_desc; ?></p>

</div><!-- panel-body Ends -->

<div class="panel-footer"><!-- panel-footer Starts -->





<div class="clearfix"> </div>

</div><!-- panel-footer Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-4 col-md-4 Ends -->

<?php } ?>