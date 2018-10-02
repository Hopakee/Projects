<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/bootstrap.min.css">
    <script src="<?php echo URL; ?>assets/js/jquery.js"></script>
    <?php
      if (isset($this->js)) {
        foreach ($this->js as $js)
        echo '<script src="'.URL.'views/'.$js.'"></script>';
      }
    ?>
    <title> Project Firestorm </title>
  </head>
  <body>

<?php Session::init(); ?>

<div id="header">
  <!-- start nav -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
    <a class="navbar-brand" href="#">Firestorm</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo URL; ?>">Home <span class="sr-only">(current)</span></a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>help">Help</a>
        </li>
        <li class="nav-item">
            <?php if (Session::get('loggedIn') == true):?>
              <a class="nav-link" href="<?php echo URL; ?>dashboard/logout">Logout</a>
            <?php else: ?>
              <a class="nav-link" href="<?php echo URL; ?>login">Login</a>
            <?php endif; ?>
          </li>
<!--  		<li class="nav-item">
  				<a class="nav-link" href="/planner">Plans</a>
  			</li>
  			<li class="nav-item">
  				<a class="nav-link" href="/pusher">Personal Assistant</a>
  			</li>
-->
      </ul>
    </div>
  </nav>
  <!-- end nav -->

</div>

<div id="content">
