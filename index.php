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
        <h1 class="card-body text-center bolder" >User Profile</h1>
        <form action=""  method="GET">
            <input type="hidden" id="updateUser_prof">
            <div class="row">
              <div class="col-md-3 border-right">
                  <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                    <div class="avatar-upload">
                      <div class="avatar-edit">
                          <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                          <label for="imageUpload"></label>
                      </div>
                      <div class="avatar-preview">
                          <div id="imagePreview" style="background-image: url(https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg);">
                          </div>
                      </div>
                  </div>

                    <!-- <span class="font-weight-bold" id="user_displayName1">
                      <?php
                        $username = Session::get('username');
                        if (isset($username)) {
                          echo $username;
                        }
                      ?>
                    </span>
                    <span class="text-black-50" id="user_email">
                      <?php
                      $email = Session::get('email');
                      if (isset($email)) {
                        echo $email;
                      }
                      ?>
                    </span> -->
                  </div>
              </div>
              <div class="col-md-5 border-right">

                      <div class="p-3 py-5">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                          <h4 class="text-right">Profile Settings<span id="edit" class="edit"></span></h4>
                      </div>
                      <!-- <div class="row mt-2">
                          <div class="col-md-6"><label class="labels">Name</label><input  type="text" id="editfirstName" class="form-control firstName_prof" placeholder="first name" value="" required></div>
                          <div class="col-md-6"><label class="labels">Last Name</label><input  type="text" id="editlastName" class="form-control lastName_prof" value="" placeholder="surname" required></div>
                      </div> -->
                      <div class="row mt-3">
                          <div class="col-md-12"><label class="labels">Full Name</label>
                          <span  type="text" id="editFullName" class="form-control FullName_prof disabled" placeholder="full name" value="" required>
                            <?php
                              $name = Session::get('name');
                              if (isset($name)) {
                                echo $name;
                              }
                            ?>
                            </span>
                          </div>
                          <div class="col-md-12"><label class="labels">Username</label>
                          <span  id="editdisplayName" type="text" class="form-control displayName_prof disabled" placeholder="display name" value="" required> 
                            <?php
                            $username = Session::get('username');
                            if (isset($username)) {
                              echo $username;
                            }
                            ?>
                          </span>
                        </div>
                          <div class="col-md-12"><label class="labels">Email</label>
                          <span  id="editemail" type="text" class="form-control email_prof disabled" placeholder="email" value="" required>
                            <?php
                              $email = Session::get('email');
                              if (isset($email)) {
                                echo $email;
                              }
                            ?>
                            </span>
                          </div>
                          
                      </div>
                      <div class="row mt-3">
                          <!-- <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                          <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div> -->
                      </div>
                      <div class="mt-5 text-center             
                        <?php
                        $path = $_SERVER['SCRIPT_FILENAME'];
                        $current = basename($path, '.php');
                        if ($current == 'profile') {
                          echo "active ";
                        }
                        ?>">
                        <a  href="profile.php?id=<?php echo Session::get("id"); ?>" class="btn btn-primary profile-button" type="button" id="updateUserProfile">Update User</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="p-3 py-5">
                      <div class="d-flex justify-content-between align-items-center experience"><span><h4>Update Roles</h4></span></div><br>
                      <div class="col-md-12"><label class="labels">Roles</label>
                    <select disabled="disabled"  id="selectRole" class="form-select selectrole " class="input"  style="cursor: pointer;" value="">
                        <option value="" hidden>your role as a user</option>
                        <?php
                        $roleid = Session::get('roleid') ;
                        if($roleid == '1'){?>
                          <option value="1" selected='selected'>Admin</option>
                          <option value="2">Editor</option>
                          <option value="3">User only</option>
                        <?php }elseif($roleid == '2'){?>
                          <option value="1">Admin</option>
                          <option value="2" selected='selected'>Editor</option>
                          <option value="3">User only</option>
                        <?php }elseif($roleid == '3'){?>
                          <option value="1">Admin</option>
                          <option value="2">Editor</option>
                          <option value="3" selected='selected'>User only</option>
                        <?php } ?>
                    </select>
                  </div><br>

                  <div class="col-md-12"><label class="labels">Id</label>
                  <span  id="inputID" class="form-control disabled" placeholder="user id">                           
                             <?php
                              $userid = Session::get('id');
                              if (isset($userid)) {
                                echo $userid;
                              }
                            ?>
                            </span>
                  </div>

              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
      
  </body>
</html>

    
  <?php
  include 'inc/footer.php';

  ?>
