<?php
session_start();
include('header.php');

?>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
        <?php 
        if (isset($_SESSION['error'])) {
            echo "<div class='alert alert-danger'>" .  $_SESSION['error'] . "</div>";
        }
        ?>
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">HR</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">!!!!!</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
        </div>
      </div>
    </div>
  </header>

  <?php include('footer.php') ?>
