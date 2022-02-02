<?php
include 'inc/header.php';

Session::CheckSession();

$logMsg = Session::get('logMsg');
if (isset($logMsg)) {
  echo $logMsg;
}
$msg = Session::get('msg');
if (isset($msg)) {
  echo $msg;
}
Session::set("msg", NULL);
Session::set("logMsg", NULL);



if (isset($_GET['remove'])) {
  $deleteFound = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['remove']);
  $removeFound = $users->deleteFoundById($deleteFound);
}
if (isset($removeFound)) {
  echo $removeFound;
}

if (isset($_POST['isClaimed'])) {
  $isClaimed = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_POST['isClaimed']);
  $isClaimedId = $users->ItemIsClaimed($isClaimed , $_POST);
}
if (isset($isClaimedId)) {
  echo $isClaimedId;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['isClaimed'])) {
  $saveToClaimant = $users->claimedRegistration($_POST);
}

if (isset($saveClaimant)) {
  echo $saveToClaimant;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lost and Found</title>
        <link href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" rel="stylesheet" />
        <style>
          .form-group > label{
            display:flex;
          }
          label{
            margin-top:10px;
          }
          .btn-sm {
            color: white!important;
          }
          .bg-dark{
            background-color:#343a4000!important;
            border-bottom: none!important;
          }
          .bckground{
            background-position: center;
            background-size: cover; 
            position: absolute;  
            top: 0; 
            left: 0; 
            width: 100%;
            height: auto;
            z-index: -1;
            height:550px;
            background-color: #9667ff;
            background-image: linear-gradient(315deg, #9667ff 0%, #3b30aa 74%);
          }
          .IMGLOG{
              z-index: -1!important;
              margin: 45px!important;
          }
          .card_body{
            margin-top:230px;
          }
          .bolder{
            color:white;
            font-size: 3rem;
            font-weight: 900;
            line-height: 1.125;
            padding-bottom: 10%;
          }
          .modal-backdrop{
            z-index: 1;
          }
          .disabled{
            background-color:#e9ecef;
          }
          .z-20{
            z-index: 3000;
          }
        </style>
        
    </head>
    <body>

        <section class="bckground">
        <div class="IMGLOG">
          <img class="bckgroundimg" src="image/listitem.png" alt="">
        </div>
        </section>

    <div class="card-body card_body">
      <h1 class="card-body text-center bolder" style="margin-top:10px;">Lost and Found Items</h1>
      <table id="tbl-finder" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th  class="text-center">Sequence no.</th>
                <th  class="text-center">Finder Name</th>
                <th  class="text-center">Finder Phone Number</th>
                <th  class="text-center">Item Name</th>
                <th  class="text-center">Item Description</th>
                <th  class="text-center">Date Found</th>
                <th  class="text-center">Location Found</th>
                <th  class="text-center">isClaimed</th>
                <th hidden class="text-center">Created</th>
                <th  width='25%' class="text-center">Action</th>
              </tr>
            </thead>
            <tbody class="tbl_lostnfound">
                <?php

                $allFound = $users->selectAllFoundData();

                if ($allFound) {
                  $i = 0;
                  foreach ($allFound as  $value) {
                    $i++;

                ?>

                    <div class="modal bd-example-modal-lg" id="editFinderModal<?php echo $value->id;?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4>View Found Item</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              
                            <div class="card-body">
                              <form class="" action="" method="POST">
                              <div class="row mt-2">
                                <div class="col-md-6">
                                  <label for="finderName">FINDER'S FULL NAME</label>
                                  <input disabled type="text" id="finderName" name="finderNameF" value="<?php echo $value->finderNameF;?>" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <label for="finderPhoneNumber">FINDER'S PHONE NUMBER</label>
                                  <input disabled type="text" id="finderPhoneNumber" name="finderPhoneNumber" pattern="^\d{11}$" maxlength="11" value="<?php echo $value->finderPhoneNumber;?>" class="form-control">
                                </div>

                                <div class="col-md-6">
                                  <label for="uniqidItem">ITEM ID</label>
                                  <input disabled type="text" id="uniqidItem" name="uniqidItem" value="<?php echo $value->uniqidItem; ?>" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <label for="uniqidSerial">SERIAL NO.</label>
                                  <input disabled type="text" id="uniqidSerial" name="uniqidSerial" value="<?php echo $value->uniqidSerial; ?>" class="form-control">
                                </div>
                                </div>
                                <div class="row mt-3">
                                <div class="col-md-12">
                                  <label for="itemName">ITEM NAME</label>
                                  <input disabled type="text" id="itemName" name="itemNameF" value="<?php echo $value->itemNameF; ?>" class="form-control">
                                </div>
                                <div class="col-md-12">
                                  <label for="itemDesc">ITEM DESCRIPTION</label>
                                  <textarea disabled type="itemDescF" class="form-control" value="" placeholder="Enter Item Details" id="itemDesc" name="itemDesc" class="form-control" rows="3" style="text-transform: capitalize;" required><?php echo $value->itemDescF;?></textarea>
                                </div>
                                <div class="col-md-12">
                                  <label for="dateFound">DATE FOUND</label>
                                  <span disabled type="date" id="dateFound" name="dateFound" value="<?php echo $value->dateFound; ?>" class="form-control disabled"><?php echo $value->dateFound; ?></span>
                                </div>
                                <div class="col-md-12">
                                  <label for="locationFound">LOCATION FOUND</label>
                                  <input disabled type="text" id="locationFound" name="locationFoundF" value="<?php echo $value->locationFoundF; ?>" class="form-control">
                                </div>
                                <div class="col-md-12">
                                  <br>
                                  <hr>
                                  <br>
                                </div>
                                <div class="col-md-6">
                                  <label for="uniqidFound">FOUND ID</label>
                                  <input disabled type="text" id="uniqidFound" name="uniqidFound" value="<?php echo $value->uniqidFound;?>" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <label for="uniqidFinder">FINDER'S ID</label>
                                  <input disabled type="text" id="uniqidFinder" name="uniqidFinder" value="<?php echo $value->uniqidFinder;?>" class="form-control">
                                </div>
                                </div>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                      <!---------------------- -->
                      <!-- SET AS CLAIMED ITEM -->
                    <div class="modal bd-example-modal-lg" id="addtoClaimedModal<?php echo $value->id;?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4>Move to claimed Item</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              
                            <div class="card-body">
                              <form class="" action="" method="POST">
                              <div class="row mt-2">
                                 <div class="col-md-12">
                                   <label for="claimantNameC">CLAIMANT NAME</label>
                                   <input  type="text" id="claimantNameC" name="claimantNameC" value="" class="form-control" required>
                                </div>
                                <!-- <div class="col-md-6">
                                   <label for="dateClaimedC">DATE CLAIMED</label>
                                   <input name="dateClaimedC" datepicker="" id="dateClaimedC" type="text" class="dateClaimedC form-control datepicker-input" value="" autocomplete="off" required />

                                </div> -->
                                <div class="col-md-12">
                                  <br>
                                  <hr>
                                 </div>
                                 <div class="col-md-6">
                                  <label for="finderNameF">FINDER NAME</label>
                                  <input disabled type="text" id="finderNameF" name="finderNameF" value="<?php echo $value->finderNameF;?>" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <label for="finderPhoneNumber">FINDER'S PHONE NUMBER</label>
                                  <input disabled type="text" id="finderPhoneNumber" name="finderPhoneNumber" pattern="^\d{11}$" maxlength="11" value="<?php echo $value->finderPhoneNumber;?>" class="form-control">
                                </div>

                                <div class="col-md-6">
                                  <label for="uniqidItem">ITEM ID</label>
                                  <input disabled type="text" id="uniqidItem" name="uniqidItem" value="<?php echo $value->uniqidItem; ?>" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <label for="uniqidSerial">SERIAL NO.</label>
                                  <input disabled type="text" id="uniqidSerial" name="uniqidSerial" value="<?php echo $value->uniqidSerial; ?>" class="form-control">
                                </div>
                                </div>
                                <div class="row mt-3">
                                <div class="col-md-12">
                                  <label for="itemName">ITEM NAME</label>
                                  <input disabled type="text" id="itemName" name="itemNameF" value="<?php echo $value->itemNameF; ?>" class="form-control">
                                </div>
                                <div class="col-md-12">
                                  <label for="itemDesc">ITEM DESCRIPTION</label>
                                  <textarea disabled type="itemDescF" class="form-control" value="" placeholder="Enter Item Details" id="itemDesc" name="itemDesc" class="form-control" rows="3" style="text-transform: capitalize;" required><?php echo $value->itemDescF;?></textarea>
                                </div>
                                <div class="col-md-12">
                                  <label for="dateFound">DATE FOUND</label>
                                  <span disabled type="date" id="dateFound" name="dateFound" value="<?php echo $value->dateFound; ?>" class="form-control disabled"><?php echo $value->dateFound; ?></span>
                                </div>
                                <div class="col-md-12">
                                  <label for="locationFound">LOCATION FOUND</label>
                                  <input disabled type="text" id="locationFound" name="locationFoundF" value="<?php echo $value->locationFoundF; ?>" class="form-control">
                                </div>
                                <div class="col-md-12">
                                  <br>
                                  <hr>
                                </div>
                                <div class="col-md-6">
                                  <label for="uniqidFound">FOUND ID</label>
                                  <input disabled type="text" id="uniqidFound" name="uniqidFound" value="<?php echo $value->uniqidFound;?>" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <label for="uniqidFinder">FINDER'S ID</label>
                                  <input disabled type="text" id="uniqidFinder" name="uniqidFinder" value="<?php echo $value->uniqidFinder;?>" class="form-control">
                                </div>
                                <div class="col-md-12">
                                  <br>
                                  <br>
                                </div>
                                <div class="form-group">
                                 <button class="btn btn-success btn-block saveToClaimantdisable
                                 <?php if (Session::get("id") == $value->id) {
                                  echo "disabled";
                                  } ?>"  value="<?php echo $value->id;?>" data-id="<?php echo $value->id;?>" name="isClaimed" type="submit">SET AS CLAIMED ITEM</button>
                                </div>
                                </div>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                <tr class="text-center" data-id="<?php echo $value->id;?>"
                <?php if (Session::get("id") == ($value->isClaimed == '1')) {
                  echo "style='background:#ffc107' ";
                } ?>
                >

                  <td><?php echo $i; ?></td>
                  <td><span class="badge badge-lg badge-secondary text-white"><?php echo $value->finderNameF; ?></span></td>
                  <td><?php echo $value->finderPhoneNumber; ?></td>
                  <td><?php echo $value->itemNameF; ?></td>
                  <td><?php echo $value->itemDescF; ?></td>
                  <td><?php echo $value->dateFound; ?></td>
                  <td><?php echo $value->locationFoundF; ?></td>
                  <td>
                    <?php 
                      if ($value->isClaimed  == '0'){
                        echo "<span class='badge badge-lg badge-danger text-white'>NO</span>";
                      } elseif ($value->isClaimed == '1') {
                        echo "<span class='badge badge-lg badge-success text-white'>YES</span>";
                    }?>
                  </td>
                  <td hidden><span class="badge badge-lg badge-secondary text-white"><?php echo $users->formatDate($value->created_at);  ?></span></td>

                  <td>
                    <?php if ( Session::get("roleid") == '1' ) {?>
                      <a class="btn btn-success btn-sm"   data-toggle="modal" data-target="#editFinderModal<?php echo $value->id;?>" id="<?php echo $value->id;?>">View</a>
                      <a class="btn btn-info btn-sm " href="updateFound.php?id=<?php echo $value->id;?>" <?php if (Session::get("id") == ($value->isClaimed == '1')){ echo "style='display: none;'"; } ?> >Edit</a>
                      <a class="btn btn-secondary btn-sm"data-toggle="modal" data-target="#addtoClaimedModal<?php echo $value->id;?>" id="<?php echo $value->id;?>"  <?php if (Session::get("id") == ($value->isClaimed == '1')){ echo "style='display: none;'"; } ?> >Set as claimed item</a>
                      <a onclick="return confirm('Are you sure to delete data?')" class="btn btn-danger
                      <?php if (Session::get("id") == $value->id) {
                      echo "disabled";
                      } ?>
                      btn-sm " href="?remove=<?php echo $value->id;?>">Remove</a>
                      
                    <?php }else{ ?>
                      <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#editFinderModal<?php echo $value->id;?>" id="<?php echo $value->id;?>">View</a>
                      <a class="btn btn-secondary btn-sm"data-toggle="modal" data-target="#addtoClaimedModal<?php echo $value->id;?>" id="<?php echo $value->id;?>"  <?php if (Session::get("id") == ($value->isClaimed == '1')){ echo "style='display: none;'"; } ?> >Set as claimed item</a>
                      <!-- <a class="btn btn-info btn-sm " href="updateFound.php?id=<?php echo $value->id;?>" <?php if (Session::get("id") == ($value->isClaimed == '1')){ echo "style='display: none;'"; } ?> >Edit</a> -->
                      <!-- <a onclick="return confirm('Are you sure to delete data?')" class="btn btn-danger
                      <?php if (Session::get("id") == $value->id) {
                      echo "disabled";
                      } ?>
                      btn-sm " href="?remove=<?php echo $value->id;?>">Remove</a>-->
                     <?php } ?> 

                  </td>
                </tr>
                <?php }}else{ ?>
                <tr class="text-center">
                <td>No data availabe!</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
      </div>

    <script>
        $(function(){
            $(".saveToClaimantdisable").on('click', function(e) {
                e.preventDefault();
                $(this).parents('.tbl_lostnfound').find('tr'+$(this).data('id')).fadeOut('fast');
            });
        });

    </script>
  <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
  <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/datepicker.bundle.js"></script>
  </body>
</html>
<?php
  include 'inc/footer.php';
?>