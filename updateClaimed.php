<?php
include 'inc/header.php';
Session::CheckSession();

 ?>

<?php

if (isset($_GET['id'])) {
  $userid = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['id']);

}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $updateClaimed = $users->updateClaimedByIdInfo($userid, $_POST);
  
  }
  if (isset($updateFound)) {
    echo $updateClaimed;
  }



 ?>

<div class="card ">
         <div class="card-header">
          <h3>User Profile <span class="float-right"> <a href="ListItem.php" class="btn btn-primary">Back</a> </h3>
        </div>
        <div class="card-body">

    <?php
    $getUinfo = $users->getClaimedInfoById($userid);
    if ($getUinfo) {
      
     ?>
          <div style="width:600px; margin:0px auto">

          <form class="" action="" method="POST">
 
              <div class="form-group">
                <label for="claimantName">CLAIMANT'S NAME</label>
                <input type="text" name="claimantName" value="<?php echo $getUinfo->claimantName; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="itemNameC">ITEM NAME</label>
                <input type="text" name="itemNameC" value="<?php echo $getUinfo->itemNameC; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="itemDescC">ITEM DESCRIPTION</label>
                <textarea type="text" class="form-control" placeholder="Enter Item Details" name="itemDescC" class="form-control" rows="3" style="text-transform: capitalize;" required><?php echo $getUinfo->itemDescC; ?></textarea>
              </div>
              <div class="form-group">
                <label for="dateClaimed">DATE CLAIMED</label>
                <input type="date" name="dateClaimed" value="<?php echo $getUinfo->dateClaimed; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="locationFoundC">LOCATION FOUND</label>
                <input type="text" name="locationFoundC" value="<?php echo $getUinfo->locationFoundC; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="finderNameC">FINDER'S FULL NAME</label>
                <input type="text" id="finderNameC" name="finderNameC" value="<?php echo $getUinfo->finderNameC; ?>" class="form-control">
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
      } ?>



      </div>
    </div>


  <?php
  include 'inc/footer.php';

  ?>
