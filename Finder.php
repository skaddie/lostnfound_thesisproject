<?php
include 'inc/header.php';

Session::CheckSession();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['saveFinder'])) {

  $saveFinder = $users->foundRegistration($_POST);
}

if (isset($saveFinder)) {
  echo $saveFinder;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lost and Found</title>
        <link href="assets/register.css" rel="stylesheet" />
        <link href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" rel="stylesheet" />
        <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link asyncrel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css" rel="stylesheet"/>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"></script> -->
        <style>
            .bg-dark{
        background-color:#343a4000!important;
        border-bottom: none!important;
          }
        .bckground{
            min-height: 100vh;
            background-position: center;
            background-size: cover; 
            position: absolute;  
            top: 0; 
            left: 0; 
            width: 100%;
            height: auto;
            z-index: -1;
            background-color: #4834d4;
            background-image: linear-gradient(315deg, #4834d4 0%, #2a2a72 74%);
        }
        .IMGLOG{
            z-index: -1!important;
            margin: 230px!important;
        }
        .primary{
            color:white;
        }
        .wrapper{
            margin-top: 5%;
        }
        form textarea, form .custom-select {
        width: 100%!important;
        padding: 5% 10%!important;
        height: 155px;
        background-color: rgb(46 17 140 / 13%)!important;
        border: 0!important;
        border-radius: 4px!important;
        font-size: 1rem!important;
        color: white!important;
        }
        form label {
            left: 70px;
        }

        .button {
            background-color: var(--pink)!important;
            margin-top: 40px!important;
            padding: 25px 90px!important;
            color: var(--white)!important;
            text-transform: uppercase!important;
            font-weight: 400;
            font-size: 1rem!important;
            border: 0;
            border-radius: 80px;
            cursor: pointer!important;
            align-self: center;
            margin-bottom:5%!important;
        }
        form textarea:valid + label,
        form textarea:focus + label {
            color: var(--red);
            top: 12%;
            font-size: 0.7rem;
            font-weight: 700;
        }
        .form-container{
          width:50%;
        }
        </style>
    </head>
    <body>

    <div class="bckground">
    <div class="IMGLOG">
          <img class="bckgroundimg" src="image/lostnfound.png" alt="">
        </div>    
    <section class="wrapper">
    <main>
    <div class="form-container">
     <center><small><span id="alert" class=""></span></small></center>
      <h2 class="primary">Register Lost or Found Items</h2>
      <form action="" method="post">

        <section>
          <input type="text" name="finderNameF" autocomplete="off" style="text-transform: capitalize;" required />
          <label for="finderNameF">FULL NAME</label>
          <div class="form-icon">
          <svg class="svg-icon" viewBox="0 0 20 20">
			    <path  d="M10.001,9.658c-2.567,0-4.66-2.089-4.66-4.659c0-2.567,2.092-4.657,4.66-4.657s4.657,2.09,4.657,4.657
			    C14.658,7.569,12.569,9.658,10.001,9.658z M10.001,1.8c-1.765,0-3.202,1.437-3.202,3.2c0,1.766,1.437,3.202,3.202,3.202
			    c1.765,0,3.199-1.436,3.199-3.202C13.201,3.236,11.766,1.8,10.001,1.8z"></path>
			    <path  d="M9.939,19.658c-0.091,0-0.179-0.017-0.268-0.051l-7.09-2.803c-0.276-0.108-0.461-0.379-0.461-0.678
			    c0-4.343,3.535-7.876,7.881-7.876c4.343,0,7.878,3.533,7.878,7.876c0,0.302-0.182,0.572-0.464,0.68l-7.213,2.801
			    C10.118,19.64,10.03,19.658,9.939,19.658z M3.597,15.639l6.344,2.507l6.464-2.512c-0.253-3.312-3.029-5.927-6.404-5.927
			    C6.623,9.707,3.848,12.326,3.597,15.639z"></path>
			    <path  d="M9.939,19.658c0,0-0.003,0-0.006,0c-0.347-0.003-0.646-0.253-0.709-0.596L7.462,9.567
			    C7.389,9.172,7.65,8.79,8.046,8.718C8.442,8.643,8.82,8.906,8.894,9.301l1.076,5.796l1.158-5.741
			    c0.08-0.394,0.461-0.655,0.86-0.569c0.396,0.08,0.649,0.464,0.569,0.859l-1.904,9.427C10.585,19.413,10.286,19.658,9.939,19.658z"></path>
		    </svg>
        </div>
        </section>
        <section>
          <input type="tel" name="finderPhoneNumber" autocomplete="off" pattern="^\d{11}$" maxlength="11" required />
          <label for="finderPhoneNumber">PHONE NUMBER</label>
          <div class="form-icon">
           <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-alt" class="svg-inline--fa fa-mobile-alt fa-w-10" role="img" viewBox="0 0 320 512" width="25.59px!important" height="25.59px!important">
              <path fill="white" d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z"/>
            </svg>
          </div>
        </section>
        <section>
          <input type="text" name="itemNameF" autocomplete="off" style="text-transform: capitalize;" required />
          <label for="itemNameF">ITEM NAME</label>
          <div class="form-icon">
          <svg class="svg-icon" viewBox="0 0 20 20">
				<path d="M17.283,5.549h-5.26V4.335c0-0.222-0.183-0.404-0.404-0.404H8.381c-0.222,0-0.404,0.182-0.404,0.404v1.214h-5.26c-0.223,0-0.405,0.182-0.405,0.405v9.71c0,0.223,0.182,0.405,0.405,0.405h14.566c0.223,0,0.404-0.183,0.404-0.405v-9.71C17.688,5.731,17.506,5.549,17.283,5.549 M8.786,4.74h2.428v0.809H8.786V4.74z M16.879,15.26H3.122v-4.046h5.665v1.201c0,0.223,0.182,0.404,0.405,0.404h1.618c0.222,0,0.405-0.182,0.405-0.404v-1.201h5.665V15.26z M9.595,9.583h0.81v2.428h-0.81V9.583zM16.879,10.405h-5.665V9.19c0-0.222-0.183-0.405-0.405-0.405H9.191c-0.223,0-0.405,0.183-0.405,0.405v1.215H3.122V6.358h13.757V10.405z"></path>
			</svg>
          </div>
        </section>
        <section>
          <textarea type="text" name="itemDescF" autocomplete="off" style="text-transform: capitalize;" required ></textarea>
          <label for="itemDescF">ITEM DESCRIPTION</label>
          <div class="form-icon">
          <svg class="svg-icon" viewBox="0 0 20 20">
				<path d="M17.283,5.549h-5.26V4.335c0-0.222-0.183-0.404-0.404-0.404H8.381c-0.222,0-0.404,0.182-0.404,0.404v1.214h-5.26c-0.223,0-0.405,0.182-0.405,0.405v9.71c0,0.223,0.182,0.405,0.405,0.405h14.566c0.223,0,0.404-0.183,0.404-0.405v-9.71C17.688,5.731,17.506,5.549,17.283,5.549 M8.786,4.74h2.428v0.809H8.786V4.74z M16.879,15.26H3.122v-4.046h5.665v1.201c0,0.223,0.182,0.404,0.405,0.404h1.618c0.222,0,0.405-0.182,0.405-0.404v-1.201h5.665V15.26z M9.595,9.583h0.81v2.428h-0.81V9.583zM16.879,10.405h-5.665V9.19c0-0.222-0.183-0.405-0.405-0.405H9.191c-0.223,0-0.405,0.183-0.405,0.405v1.215H3.122V6.358h13.757V10.405z"></path>
			</svg>
          </div>
        </section>
        <section>
          <input name="dateFound" datepicker="" id="dateFound" type="text" class="dateFound datepicker-input" value="" autocomplete="off" required />

          <label for="dateFound">DATE FOUND</label>
          <div class="form-icon">
          <svg class="svg-icon" viewBox="0 0 20 20">
				<path d="M16.254,3.399h-0.695V3.052c0-0.576-0.467-1.042-1.041-1.042c-0.576,0-1.043,0.467-1.043,1.042v0.347H6.526V3.052c0-0.576-0.467-1.042-1.042-1.042S4.441,2.476,4.441,3.052v0.347H3.747c-0.768,0-1.39,0.622-1.39,1.39v11.813c0,0.768,0.622,1.39,1.39,1.39h12.507c0.768,0,1.391-0.622,1.391-1.39V4.789C17.645,4.021,17.021,3.399,16.254,3.399z M14.17,3.052c0-0.192,0.154-0.348,0.348-0.348c0.191,0,0.348,0.156,0.348,0.348v0.347H14.17V3.052z M5.136,3.052c0-0.192,0.156-0.348,0.348-0.348S5.831,2.86,5.831,3.052v0.347H5.136V3.052z M16.949,16.602c0,0.384-0.311,0.694-0.695,0.694H3.747c-0.384,0-0.695-0.311-0.695-0.694V7.568h13.897V16.602z M16.949,6.874H3.052V4.789c0-0.383,0.311-0.695,0.695-0.695h12.507c0.385,0,0.695,0.312,0.695,0.695V6.874z M5.484,11.737c0.576,0,1.042-0.467,1.042-1.042c0-0.576-0.467-1.043-1.042-1.043s-1.042,0.467-1.042,1.043C4.441,11.271,4.908,11.737,5.484,11.737z M5.484,10.348c0.192,0,0.347,0.155,0.347,0.348c0,0.191-0.155,0.348-0.347,0.348s-0.348-0.156-0.348-0.348C5.136,10.503,5.292,10.348,5.484,10.348z M14.518,11.737c0.574,0,1.041-0.467,1.041-1.042c0-0.576-0.467-1.043-1.041-1.043c-0.576,0-1.043,0.467-1.043,1.043C13.475,11.271,13.941,11.737,14.518,11.737z M14.518,10.348c0.191,0,0.348,0.155,0.348,0.348c0,0.191-0.156,0.348-0.348,0.348c-0.193,0-0.348-0.156-0.348-0.348C14.17,10.503,14.324,10.348,14.518,10.348z M14.518,15.212c0.574,0,1.041-0.467,1.041-1.043c0-0.575-0.467-1.042-1.041-1.042c-0.576,0-1.043,0.467-1.043,1.042C13.475,14.745,13.941,15.212,14.518,15.212z M14.518,13.822c0.191,0,0.348,0.155,0.348,0.347c0,0.192-0.156,0.348-0.348,0.348c-0.193,0-0.348-0.155-0.348-0.348C14.17,13.978,14.324,13.822,14.518,13.822z M10,15.212c0.575,0,1.042-0.467,1.042-1.043c0-0.575-0.467-1.042-1.042-1.042c-0.576,0-1.042,0.467-1.042,1.042C8.958,14.745,9.425,15.212,10,15.212z M10,13.822c0.192,0,0.348,0.155,0.348,0.347c0,0.192-0.156,0.348-0.348,0.348s-0.348-0.155-0.348-0.348C9.653,13.978,9.809,13.822,10,13.822z M5.484,15.212c0.576,0,1.042-0.467,1.042-1.043c0-0.575-0.467-1.042-1.042-1.042s-1.042,0.467-1.042,1.042C4.441,14.745,4.908,15.212,5.484,15.212z M5.484,13.822c0.192,0,0.347,0.155,0.347,0.347c0,0.192-0.155,0.348-0.347,0.348s-0.348-0.155-0.348-0.348C5.136,13.978,5.292,13.822,5.484,13.822z M10,11.737c0.575,0,1.042-0.467,1.042-1.042c0-0.576-0.467-1.043-1.042-1.043c-0.576,0-1.042,0.467-1.042,1.043C8.958,11.271,9.425,11.737,10,11.737z M10,10.348c0.192,0,0.348,0.155,0.348,0.348c0,0.191-0.156,0.348-0.348,0.348s-0.348-0.156-0.348-0.348C9.653,10.503,9.809,10.348,10,10.348z"></path>
			</svg>
          </div>
        </section>
        <section>
          <input type="text" name="locationFoundF" autocomplete="off" style="text-transform: capitalize;" required />
          <label for="locationFoundF">LOCATION FOUND</label>
          <div class="form-icon">
            <svg class="svg-icon" viewBox="0 0 20 20">
				<path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
		    </svg>
          </div>
        </section>
        <input name="saveFinder" id="saveFinder" type="submit" value="SAVE" class="register button"/>

      </form>
    </div>
  </main>
</section>
</div>
<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/datepicker.bundle.js"></script>
</body>
</html>
<?php
  include 'inc/footer.php';
?>