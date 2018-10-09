<!doctype html>
<?php Session::init(); ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
	  <script type="text/javascript" src="<?php echo URL; ?>assest/js/custom.js"></script>
    <?php
      if (isset($this->js)) {
        foreach ($this->js as $js)
        echo '<script src="'.URL.'views/'.$js.'"></script>';
      }
    ?>
    <title> Project Firestorm </title>
  </head>
  <body>

<div id="header">
  <!-- start nav -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
    <a class="navbar-brand" href="#">Firestorm</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <?php if (Session::get('loggedIn') ==  false):?>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo URL; ?>">Home <span class="sr-only">(current)</span></a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>help">Help</a>
        </li>
        <?php endif; ?>
        <?php if (Session::get('loggedIn') == true):?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo URL; ?>dashboard">Dashboard</a>
        </li>

        <?php if (Session::get('role') == 'admin'):?>
        <li class="nav-item">
              <a class="nav-link" href="<?php echo URL; ?>user">Users</a>
        </li>
      <?php endif; ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo URL; ?>dashboard/logout">Logout</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo URL; ?>login">Login</a>
        </li>
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
