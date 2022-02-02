<?php
include 'inc/header.php';
Session::CheckSession();

 ?>

<?php

if (isset($_GET['id'])) {
  $userid = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['id']);

}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $updateFound = $users->updateFoundByIdInfo($userid, $_POST);
  
  }
  if (isset($updateFound)) {
    echo $updateFound;
  }



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" rel="stylesheet" />

</head>
<body>
<div class="card ">
         <div class="card-header">
          <h3>User Profile <span class="float-right"> <a href="ListItem.php" class="btn btn-primary">Back</a> </h3>
        </div>
        <div class="card-body">

            <?php
            $getUinfo = $users->getFoundInfoById($userid);
            if ($getUinfo) {
            
            ?>
          <div style="width:600px; margin:0px auto">

          <form class="" action="" method="POST">
              <div class="form-group">
                <label for="finderNameF">FINDER'S FULL NAME</label>
                <input type="text" id="finderNameF" name="finderNameF" value="<?php echo $getUinfo->finderNameF; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="finderPhoneNumber">FINDER'S PHONE NUMBER</label>
                <input type="text" name="finderPhoneNumber" pattern="^\d{11}$" maxlength="11" value="<?php echo $getUinfo->finderPhoneNumber; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="itemNameF">ITEM NAME</label>
                <input type="text" name="itemNameF" value="<?php echo $getUinfo->itemNameF; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="itemDescF">ITEM DESCRIPTION</label>
                <textarea type="itemDesc" class="form-control" placeholder="Enter Item Details" name="itemDescF" class="form-control" rows="3" style="text-transform: capitalize;" required><?php echo $getUinfo->itemDescF; ?></textarea>
              </div>
              <div class="form-group">
                <label for="dateFound">DATE FOUND</label>
                <input name="dateFound" datepicker="" id="dateFound" type="text" class="dateFound form-control datepicker-input" value="<?php echo $getUinfo->dateFound; ?>" autocomplete="off" required />

              </div>
              <div class="form-group">
                <label for="locationFoundF">LOCATION FOUND</label>
                <input type="text" name="locationFoundF" value="<?php echo $getUinfo->locationFoundF; ?>" class="form-control">
              </div>
              <?php if (Session::get("id") == $getUinfo->id) {?>
              <div class="form-group">
                <button type="submit" name="update" class="btn btn-success">Update</button>
              </div>
              <?php } elseif(Session::get("roleid") == '1') {?>
              <div class="form-group">
                <button type="submit" name="update" class="btn btn-success">Update</button>
              </div>
              <?php } elseif(Session::get("roleid") == '3') {?>
              <div class="form-group">
                <button type="submit" name="update" class="btn btn-success">Update</button>
              </div>
              <?php }else{ ?>
                <?php } ?>


          </form>
        </div>
        <?php }else{
        }?>



      </div>
    </div>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/datepicker.bundle.js"></script>
</body>
</html>
   
  <?php
  include 'inc/footer.php';

  ?>
