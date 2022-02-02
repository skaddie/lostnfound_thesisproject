<!-- <?php
include 'inc/header.php';

Session::CheckSession();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['saveClaimant'])) {

  $saveClaimant = $users->claimedRegistration($_POST);
}

if (isset($saveClaimant)) {
  echo $saveClaimant;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lost and Found</title>
        <link rel="stylesheet" href="assets/design.css">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link asyncrel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css" rel="stylesheet"/>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"></script> 
    </head>
    <body>
        <section class="sub-header">




        <h1>Register Found Items</h1>
    </section>

    <section>
        <div class="image1">
            <img src="image/istockphoto-1175210431-612x612.jpg">
        </div>
    </section>

    <center><small><span id="alert" class=""></span></small></center>
        <div class="container" style="max-width: 720px!important; background: rgb(52 58 64 / 19%)!important;">
            <div class="titles">Create Items</div>
            <form action="" method="post" id="finderForm">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">CLAIMANT NAME</span>
                        <input type="text" placeholder="Enter Claimant Name" name="claimantName" required>
                    </div> 
                    <div class="input-box">
                        <span class="details">ITEM NAME</span>
                        <input type="text" placeholder="Enter Item Name" name="itemNameC" style="text-transform: capitalize;" required>
                    </div>
                    <div class="input-box">
                        <span class="details">ITEM DESCRIPTION</span>
                        <textarea placeholder="Enter Item Details" name="itemDescC" class="form-control" rows="3" style="text-transform: capitalize;" required></textarea>
                    </div>
                    <div class="input-box">
                        <span class="details">DATE CLAIMED</span>
                        <input type="date" placeholder="Enter Date Found" name="dateClaimed" required>
                    </div>
                    <div class="input-box">
                        <span class="details">LOCATION FOUND</span>
                        <input type="text" placeholder="Enter Location Found" name="locationFoundC" style="text-transform: capitalize;" required>
                    </div>
                    <div class="input-box">
                        <span class="details">FINDER'S FULL NAME</span>
                        <input type="text" placeholder="Enter Reporter's Name" name="finderNameC" style="text-transform: capitalize;" required>
                    </div><br><br>          
                    </div>
                    <div class="button">
                        <button  id="saveClaimant" name="saveClaimant" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                    </div>        
            </form>
            

    </body>
</html>
<?php
  include 'inc/footer.php';
?> -->