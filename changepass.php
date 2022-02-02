<?php
include 'inc/header.php';
Session::CheckSession();
 ?>
 <?php

 if (isset($_GET['id'])) {
   $userid = (int)$_GET['id'];

 }



 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['changepass'])) {
    $changePass = $users->changePasswordBysingelUserId($userid, $_POST);
 }



 if (isset( $changePass)) {
   echo  $changePass;
 }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/register.css" rel="stylesheet" />
  <style>
            html,body{
                margin:0;
                height:100%;
            }
            .bckgroundimg{
              position: fixed; 
              top: 0; 
              left: 0; 
              width: 100%;
              height: auto;
              z-index: -1;
            }
            .card{
                background-color: rgba(0, 0, 0, 0.5)!important;
                border-radius: 10px;
                color: white;
                box-shadow: 0 15px 25px rgb(0 0 0 / 50%);
                width: 600px;
                margin: 170px auto auto auto;
            }
            .card img {
                position: absolute;
                top: -50px;
                left: calc(50% - 50px);
                width: 100px;
                border-radius: 50%;
                zoom: 2;
             }
             #remember > label > input, #remember > label{
                 cursor: pointer;
             }
             .bg-dark{
               background-color:#343a4000!important;
               border-bottom: none!important;
             }
             form input{
              background-color: rgb(35 167 217 / 33%)!important;
             }
             button{
               background-color: rgb(162 215 246 / 61%);
             }
             button:hover {
              background: linear-gradient(41.33deg, rgb(162 215 246 / 61%) 20.82%, rgb(217 104 117 / 65%) 99.37%);
              box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.45);
            }
            form{
              width: 65%;
            }
            form .custom-select{
              background: rgb(35 167 217 / 33%)!important;
            }
        </style>
</head>
<body>
<!-- <div class="card ">
   <div class="card-header">
          <h3>Change your password <span class="float-right"> <a href="profile.php?id=<?php  ?>" class="btn btn-primary">Back</a> </h3>
        </div>
        <div class="card-body">
          <div style="width:600px; margin:0px auto">

          <form class="" action="" method="POST">
              <div class="form-group">
                <label for="old_password">Old Password</label>
                <input type="password" name="old_password"  class="form-control">
              </div>
              <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" name="new_password"  class="form-control">
              </div>
              <div class="form-group">
                <label for="securityquestions">Security Question</label>
                  <select  class="text-center form-control" name="forgot_securityquestions" style="text-align:left!important; appearance:auto!important;">
                    <option value="" hidden>Pick a Question</option>
                    <option value="What is your favorite food?">What is your favorite food?</option>
                    <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                    <option value="What elementary school did you attend?">What elementary school did you attend?</option>
                    <option value="What is the name of the town where you were born?">What is the name of the town where you were born?</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="securityanswer">Security Answer</label>
                <input type="securityanswer" name="forgot_securityanswer" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" name="changepass" class="btn btn-success">Change password</button>
              </div>
          </form>
        </div>
      </div>
    </div> -->
<div class="bckground">
<img class="bckgroundimg" src="image/login_img.png" alt="">
<section class="wrapper">
  <main>
    <div class="form-container">
      <h2 class="primary">CHANGE PASSWORD <span style=" padding-left: 56px;"> <a href="profile.php?id=<?php  ?>" class="btn btn-primary">Back</a></h2>
      <form action="" method="post">

        <section>
          <input type="password" name="old_password" autocomplete="off" required />
          <label for="old_password">Old Password</label>
          <div class="form-icon">
            <svg viewBox="0 0 20 20">
              <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
            </svg>
          </div>
        </section>
        <section>
          <input type="password" name="new_password" autocomplete="off" required />
          <label for="new_password">New Password</label>
          <div class="form-icon">
            <svg viewBox="0 0 20 20">
              <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
            </svg>
          </div>
        </section>
        <section>
        <div class="formicon">
        <span class=""></span>
        <select name="forgot_securityquestions"id="sources" class="custom-select sources" placeholder=" Pick a Question" >
          <option value="" hidden ></option>
          <option value="What is your favorite food?">What is your favorite food?</option>
          <option value="What is the name of your first pet?">What is the name of your first pet?</option>
          <option value="What elementary school did you attend?">What elementary school did you attend?</option>
          <option value="What is the name of the town where you were born?">What is the name of the town where you were born?</option>
        </select>
        </div>

        </section>
        <section>
          <input type="text" name="forgot_securityanswer"  autocomplete="off" required />
          <label for="password">Security Answer</label>
          <div class="form-icon">
            <svg viewBox="0 0 20 20">
              <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
            </svg>
          </div>
        </section>
        <button name="changepass" type="submit" class="register">CHANGE PASSWORD</button>

      </form>
    </div>
  </main>
</section>
</div>
</body>
</html>
 


  <?php
  include 'inc/footer.php';

  ?>
