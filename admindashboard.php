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
?>
<?php
if (isset($_GET['id'])) {
  $userid = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['id']);
}

if (isset($_GET['remove'])) {
  $remove = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['remove']);
  $removeUser = $users->deleteUserById($remove);
}

if (isset($removeUser)) {
  echo $removeUser;
}
if (isset($_GET['deactive'])) {
  $deactive = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['deactive']);
  $deactiveId = $users->userDeactiveByAdmin($deactive);
}

if (isset($deactiveId)) {
  echo $deactiveId;
}
if (isset($_GET['active'])) {
  $active = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['active']);
  $activeId = $users->userActiveByAdmin($active);
}

if (isset($activeId)) {
  echo $activeId;
}


 ?>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
  $updateUser = $users->getUserInfoById($userid, $_POST);

}
if (isset($updateUser)) {
  echo $updateUser;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          .disabled{
            background-color:#e9ecef;
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
            background-image: linear-gradient(315deg, #9667ff 0%, #152148 74%);
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
            padding-bottom: 12%;
          }
    </style>
</head>
<body>


        <section class="bckground">
          <div class="IMGLOG">
            <img class="bckgroundimg" src="image/profile.png" alt="">
          </div>
        </section>
        <div class="card-body card_body">
        <h1 class="card-body text-center bolder" >Admin Dashboard</h1>
        </div>

    <div class="container rounded bg-white mt-5 mb-5" style="margin-top: 5%!important;">
          <!-- <div class="alert-box Usuccess">Data Updated Successfully!</div> -->
          


      <div class="card"> 
        <div class="card-header">
          <h3><i class="fas fa-users mr-2"></i>User list <span class="float-right"> 
            
          <?php
              $roleid = Session::get('roleid') ;
              if ($roleid  == '1'){
                echo "<span class='badge' style='color:black;'>Welcome Admin</span>";
              }elseif ($roleid == '3') {
                  echo "<span class='badge' style='color:black;'>Welcome User</span>";
              }
          ?>

            <span class="badge badge-lg badge-secondary text-white">
              <?php
              $username = Session::get('username');
              if (isset($username)) {
                echo $username;
              }
              ?>
            </span>

          </span></h3>
        </div>
        <div class="card-body pr-2 pl-2">
          <table id="tbl-user" class="tbl-user table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th  class="text-center"></th>
                      <th  class="text-center">User Id</th>
                      <th  class="text-center" >Username</th>
                      <th  class="text-center" hidden>Username</th>
                      <th  class="text-center" hidden>Email address</th>
                      <th  class="text-center">Roles</th>
                      <th  class="text-center">Status</th>
                      <th  class="text-center" hidden>Created</th>
                      <th  width='25%' class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                      $allUser = $users->selectAllUserData();

                      if ($allUser) {
                        $i = 0;
                        foreach ($allUser as  $value) {
                          $i++;

                     ?>

                      <tr class="text-center"
                      <?php if (Session::get("id") == $value->id) {
                        echo "style='background:#d9edf7' ";
                      } ?>
                      >

                        <td><?php echo $i; ?></td>
                        <td><span class="badge badge-lg badge-secondary text-white"><?php echo $value->inputID; ?></span></td>
                        <td><?php echo $value->username; ?></td>
                       <td hidden><?php echo $value->username; ?> <br>
                           <?php if ($value->roleid  == '1'){
                          echo "<span class='badge badge-lg badge-info text-white'>Admin</span>";
                        } elseif ($value->roleid == '2') {
                          echo "<span class='badge badge-lg badge-dark text-white'>Editor</span>";
                        }elseif ($value->roleid == '3') {
                            echo "<span class='badge badge-lg badge-dark text-white'>User Only</span>";
                        } ?></td>
                        <td hidden><?php echo $value->email; ?></td>
                        <td><?php if ($value->roleid  == '1'){
                          echo "<span class='badge badge-lg badge-info text-white'>Admin</span>";
                        } elseif ($value->roleid == '2') {
                          echo "<span class='badge badge-lg badge-dark text-white'>Editor</span>";
                        }elseif ($value->roleid == '3') {
                            echo "<span class='badge badge-lg badge-dark text-white'>User Only</span>";
                        } ?></td>
                        <td>
                          <?php if ($value->isActive == '0') { ?>
                          <span class="badge badge-lg badge-success text-white">Active</span>
                        <?php }else{ ?>
                    <span class="badge badge-lg badge-danger text-white">Inactive</span>
                        <?php } ?>

                        </td>
                        <td hidden><span class="badge badge-lg badge-secondary text-white"><?php echo $users->formatDate($value->created_at);  ?></span></td>

                        <td>
                          <?php if ( Session::get("roleid") == '1') {?>
                            <a class="btn btn-success btn-sm
                            " href="profile.php?id=<?php echo $value->id;?>">View</a>
                            <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $value->id;?>">Edit</a>
                            <a onclick="return confirm('Are you sure To Delete ?')" class="btn btn-danger
                    <?php if (Session::get("id") == $value->id) {
                      echo "disabled";
                    } ?>
                             btn-sm " href="?remove=<?php echo $value->id;?>">Remove</a>

                             <?php if ($value->isActive == '0') {  ?>
                               <a onclick="return confirm('Are you sure to deactivate user?')" class="btn btn-warning
                       <?php if (Session::get("id") == $value->id) {
                         echo "disabled";
                       } ?>
                                btn-sm " href="?deactive=<?php echo $value->id;?>">Disable</a>
                             <?php } elseif($value->isActive == '1'){?>
                               <a onclick="return confirm('Are you sure to activate user?')" class="btn btn-secondary
                       <?php if (Session::get("id") == $value->id) {
                         echo "disabled";
                       } ?>
                                btn-sm " href="?active=<?php echo $value->id;?>">Enable</a>
                             <?php } ?>




                        <?php  }elseif(Session::get("id") == $value->id  && Session::get("roleid") == '2'){ ?>
                          <a class="btn btn-success btn-sm " href="profile.php?id=<?php echo $value->id;?>">View</a>
                          <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $value->id;?>">Edit</a>
                        <?php  }elseif( Session::get("roleid") == '2'){ ?>
                          <a class="btn btn-success btn-sm
                          <?php if ($value->roleid == '1') {
                            echo "disabled";
                          } ?>
                          " href="profile.php?id=<?php echo $value->id;?>">View</a>
                          <a class="btn btn-info btn-sm
                          <?php if ($value->roleid == '1') {
                            echo "disabled";
                          } ?>
                          " href="profile.php?id=<?php echo $value->id;?>">Edit</a>
                        <?php }elseif(Session::get("id") == $value->id  && Session::get("roleid") == '3'){ ?>
                          <a class="btn btn-success btn-sm " href="profile.php?id=<?php echo $value->id;?>">View</a>
                          <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $value->id;?>">Edit</a>
                        <?php }else{ ?>
                          <a hidden class="btn btn-success btn-sm
                          <?php if ($value->roleid == '1') {
                            echo "disabled";
                          } ?>
                          " href="profile.php?id=<?php echo $value->id;?>">View</a>

                        <?php } ?>

                        </td>
                      </tr>
                    <?php }}else{ ?>
                      <tr class="text-center">
                      <td>No user availabe now !</td>
                    </tr>
                    <?php } ?>

                  </tbody>

              </table>
        </div>
      </div>
    </div>
</body>
</html>

    
<?php
  include 'inc/footer.php';

  ?>
