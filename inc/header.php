<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath."/../lib/Session.php";
Session::init();



spl_autoload_register(function($classes){

  include 'classes/'.$classes.".php";

});


$users = new Users();

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lost and Found</title>
    <link rel="stylesheet" href="assets/design.css">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/user.css">
    <link rel="stylesheet" href="assets/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/304b2c6cf8.js" crossorigin="anonymous"></script>

  </head>
  <body>


<?php


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  // Session::set('logout', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
  // <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  // <strong>Success !</strong> You are Logged Out Successfully !</div>');
  Session::destroy();
}



 ?>


    <div class="containers">

      <nav class="navbar navbar-expand-md navbar-dark bg-dark card-header">
        <a class="navbar-brand" href="home.php">Lost n Found</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto">

          <?php
          if (Session::get("login") == TRUE) {
          ?>
          <a class="nav-link isLogout" href="Finder.php"><i class="fas fa-plus mr-2"></i>Report Item</span></a>
          <!-- <a class="nav-link" href="Claimant.php"><i class="fas fa-plus mr-2"></i>Report Claimed Item</span></a> -->
          <a class="nav-link isLogout" href="ListItem.php"><i class="fas fa-list mr-2"></i>Lost and Found Items</span></a>
          <a class="nav-link isLogout" href="Inventory.php"><i class="fas fa-th-list mr-2"></i>Inventory Items</span></a>

          <?php } else{ 
            ?>
          <?php }?>
            <li class="nav-item dropdown" style="cursor: pointer;">

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


              <span id="user_displayName" ><i class="fas fa-user"></i>
              <?php
              $username = Session::get('username');
              if (isset($username)) {
                echo $username;
              }
              ?>
              </span>
            </a>

               <ul class="dropdown-menu" aria-labelledby="navbarDropdown"  style="background: black; margin: 0.125rem -68px 0; min-width: 8rem;">
                              
               <!-- if the current user is admin user-->
               <?php if (Session::get('id') == TRUE) { ?>
               <?php if (Session::get('roleid') == '1') { ?>
                <li class="nav-item">
                  <a class="nav-link" href="index.php"><i class="fas fa-chalkboard-teacher mr-2"></i>Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="admindashboard.php">
                    
                  <svg width="20px" height="16px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users-class" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-users-class fa-w-20 fa-5x"><path fill="currentColor" d="M256 288c0 35.35 28.66 64 64 64 35.35 0 64-28.65 64-64s-28.65-64-64-64c-35.34 0-64 28.65-64 64zm224 0c0 35.35 28.66 64 64 64 35.35 0 64-28.65 64-64s-28.65-64-64-64c-35.34 0-64 28.65-64 64zM96 352c35.35 0 64-28.65 64-64s-28.65-64-64-64c-35.34 0-64 28.65-64 64s28.66 64 64 64zm480 32h-64c-35.34 0-64 28.65-64 64v32c0 17.67 14.33 32 32 32h128c17.67 0 32-14.33 32-32v-32c0-35.35-28.66-64-64-64zm-224 0h-64c-35.34 0-64 28.65-64 64v32c0 17.67 14.33 32 32 32h128c17.67 0 32-14.33 32-32v-32c0-35.35-28.66-64-64-64zm-224 0H64c-35.34 0-64 28.65-64 64v32c0 17.67 14.33 32 32 32h128c17.67 0 32-14.33 32-32v-32c0-35.35-28.66-64-64-64zM96 64h448v128c24.68 0 46.98 9.62 64 24.97V49.59C608 22.25 586.47 0 560 0H80C53.53 0 32 22.25 32 49.59v167.38C49.02 201.62 71.33 192 96 192V64z" class=""></path></svg>
                  Dashboard</a>
                </li>
              <!-- <li class="nav-item">

                  <a class="nav-link" href="index.php"><i class="fas fa-users mr-2"></i>User lists </span></a>
              </li>
              <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'addUser') {
                            echo " active ";
                          }

                         ?>">

                <a class="nav-link" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add user </span></a> -->
              </li>
            <?php  } ?>

            <!-- if the current user is only local user-->
            <?php if (Session::get('roleid') == '3') { ?>
                <li class="nav-item">
                  <a class="nav-link" href="index.php"><i class="fas fa-chalkboard-teacher mr-2"></i>Profile</a>
                </li>
            <?php  } ?>



            <!-- <li class="nav-item
            <?php
      				$path = $_SERVER['SCRIPT_FILENAME'];
      				$current = basename($path, '.php');
      				if ($current == 'index') {
      					echo "active ";
      				}
      			 ?>
            ">
              <a class="nav-link" href="profile.php?id=<?php echo Session::get("id"); ?>"><i class="fab fa-500px mr-2"></i>Profile <span class="sr-only">(current)</span></a>
            </li> -->

            <li class="nav-item">
              <a class="nav-link" href="?action=logout"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>

            </li>

          <?php }else{ ?>

              <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'register') {
                            echo " active ";
                          }

                         ?>">
                <a class="nav-link" href="register.php"><i class="fas fa-user-plus mr-2"></i>Register</a>
              </li>
              <li class="nav-item
                <?php

                    				$path = $_SERVER['SCRIPT_FILENAME'];
                    				$current = basename($path, '.php');
                    				if ($current == 'login') {
                    					echo " active ";
                    				}

                    			 ?>">
                <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
              </li>

          <?php } ?>


              </ul>
            </li>
          </ul>
        </div>
      </nav>
