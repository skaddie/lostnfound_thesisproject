<?php

include 'lib/Database.php';
include_once 'lib/Session.php';


class Users{


  // Db Property
  private $db;

  // Db __construct Method
  public function __construct(){
    $this->db = new Database();
  }

  // Date formate Method
   public function formatDate($date){
     // date_default_timezone_set('Asia/Dhaka');
      $strtime = strtotime($date);
    return date('m/d/Y', $strtime);
   }



  // Check Exist Email Address Method
  public function checkExistUsername($username){
    $sql = "SELECT username from  tbl_users WHERE username = :username";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
     $stmt->execute();
    if ($stmt->rowCount()> 0) {
      return true;
    }else{
      return false;
    }
  }



  // User Registration Method
  public function userRegistration($data){
    $name = $data['name'];
    $username = $data['username'];
    $email = $data['email'];
    $inputID = $data['inputID'];
    $roleid = $data['roleid'];
    $password = $data['password'];
    $securityquestions = $data['securityquestions'];
    $securityanswer = $data['securityanswer'];

    $checkUsername = $this->checkExistUsername($username);

    if ($name == "" || $username == "" || $email == "" || $inputID == "" || $password == "" || $securityquestions == "" || $securityanswer == "") {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Please, User Registration field must not be Empty !</div></div>';
        return $msg;
    }elseif (strlen($username) < 3) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Username is too short, at least 3 Characters !</div></div>';
        return $msg;
    }elseif(strlen($password) < 5) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Password at least 6 Characters !</div></div>';
        return $msg;
    }elseif(!preg_match("#[0-9]+#",$password)) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Your Password Must Contain At Least 1 Number !</div></div>';
        return $msg;
    }elseif(!preg_match("#[a-z]+#",$password)) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Your Password Must Contain At Least 1 Number !</div></div>';
        return $msg;
    }elseif ($checkUsername == TRUE) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Username already Exists, please try another Username... !</div></div>';
        return $msg;
    }else{

      $sql = "INSERT INTO tbl_users(name, username, email, password, inputID, securityquestions, securityanswer, roleid, isActive) VALUES(:name, :username, :email, :password, :inputID, :securityquestions, :securityanswer, :roleid, :isActive)";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':name', $name);
      $stmt->bindValue(':username', $username);
      $stmt->bindValue(':email', $email);
      $stmt->bindValue(':password', SHA1($password));
      $stmt->bindValue(':inputID', $inputID);
      $stmt->bindValue(':securityquestions', $securityquestions);
      $stmt->bindValue(':securityanswer', $securityanswer);
      $stmt->bindValue(':roleid', $roleid);
      $stmt->bindValue(':isActive', 1);
      $result = $stmt->execute();
      if ($result) {
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Success! Data has been registered successfully! Please contact your admin to make your account activated!</strong></div></div>';
          return $msg;
      }else{
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Error !</strong> Something went Wrong !</div></div>';
          return $msg;
      }
    }
  }

  // Found Item Registration Method
  public function foundRegistration($data){
    $uniqidFound = uniqid('found_');
    $uniqidFinder = uniqid('finder_');
    $finderNameF = $data['finderNameF'];
    $finderPhoneNumber = $data['finderPhoneNumber'];
    $uniqidItem = uniqid('item_');
    $itemNameF = $data['itemNameF'];
    $itemDescF = $data['itemDescF'];
    $uniqidSerial = uniqid(true);
    $dateFound = $data['dateFound'];
    $locationFoundF = $data['locationFoundF'];



    if ($finderNameF == "" || $finderPhoneNumber == ""|| $itemNameF == "" || $itemDescF == "" || $dateFound == "" || $locationFoundF == "" ) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
      <strong>Error !</strong> Input Fields must not be Empty !</div></div>';
          return $msg;
        }elseif (strlen($finderNameF) < 3) {
          $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
      <strong>Error !</strong> Username is too short, at least 3 Characters !</div></div>';
          return $msg;
        }elseif (filter_var($finderPhoneNumber,FILTER_SANITIZE_NUMBER_INT) == FALSE) {
          $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
      <strong>Error !</strong> Enter only Number Characters for inputID number field !</div></div>';
          return $msg;


    }elseif (strlen($itemNameF) < 3) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
      <strong>Error !</strong> Username is too short, at least 3 Characters !</div></div>';
        return $msg;
    }else{

      $sql = "INSERT INTO tbl_found(uniqidFound, uniqidFinder, finderNameF, finderPhoneNumber, uniqidItem, itemNameF, itemDescF, uniqidSerial, dateFound, locationFoundF) VALUES(:uniqidFound, :uniqidFinder, :finderNameF, :finderPhoneNumber, :uniqidItem, :itemNameF, :itemDescF, :uniqidSerial, :dateFound, :locationFoundF)";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':uniqidFound', $uniqidFound);
      $stmt->bindValue(':uniqidFinder', $uniqidFinder);
      $stmt->bindValue(':finderNameF', $finderNameF);
      $stmt->bindValue(':finderPhoneNumber', $finderPhoneNumber);
      $stmt->bindValue(':uniqidItem', $uniqidItem);
      $stmt->bindValue(':itemNameF', $itemNameF);
      $stmt->bindValue(':itemDescF', $itemDescF);
      $stmt->bindValue(':uniqidSerial', $uniqidSerial);
      $stmt->bindValue(':dateFound', $dateFound);
      $stmt->bindValue(':locationFoundF', $locationFoundF);
      $result = $stmt->execute();
      if ($result) {
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Success !</strong> Wow, Data Registered Successfully !</div></div>';
          return $msg;
      }else{
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Error !</strong> Oops! Something went Wrong !</div></div>';
          return $msg;
      }
    }
  }


    // Get Single User Information By Id Method
    public function claimedRegistration($data){
      $claimantNameC = $data['claimantNameC'];
      if ($claimantNameC == "" ) {
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
        <strong>Error !</strong> Input Fields must not be Empty !</div</div>>';
            return $msg;
          }elseif (strlen($claimantNameC) < 3) {
            $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
            <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
      <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
        <strong>Error !</strong> Claimant Name is too short, at least 3 Characters !</div></div>';
            return $msg;
      }else{
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Success!</strong></div></div>';
          return $msg;
        
      }
    }

 
    public function ItemIsClaimed($isClaimed, $data){
      $claimantNameC = $data['claimantNameC'];

      $sql = "INSERT INTO tbl_claimed SELECT * FROM tbl_found WHERE id=:id";
      $sql2 = "UPDATE tbl_claimed SET

      isClaimed=:isClaimed
      WHERE id = :id";
       $stmt = $this->db->pdo->prepare($sql);
       $stmt2 = $this->db->pdo->prepare($sql2);
       $stmt->bindValue(':id', $isClaimed);
       $stmt2->bindValue(':isClaimed', 1);
       $stmt2->bindValue(':id', $isClaimed);
       $result = $stmt->execute();
       $result2 = $stmt2->execute();

       $sql3 = "UPDATE tbl_claimed SET

       claimantNameC=:claimantNameC
       WHERE id = :id";
       $stmt3 = $this->db->pdo->prepare($sql3);
       $stmt3->bindValue(':claimantNameC', $claimantNameC);
       $stmt3->bindValue(':id', $isClaimed);
       $result3 = $stmt3->execute();

      //  $data = ['claimantNameC' => $claimantNameC];
        if ($result || $result2 || $result3) {
          $sql1 = "DELETE FROM tbl_found WHERE id = :id ";
          $stmt1 = $this->db->pdo->prepare($sql1);
          $stmt1->bindValue(':id', $isClaimed);
          $result1 = $stmt1->execute();
          return $result1;


         
            echo "<script>location.href='ListItem.php';</script>";
            Session::set('msg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
            <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
      <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
            <strong>Data has been set as claimed!</strong>!</div></div>');

        }else{
          echo "<script>location.href='ListItem.php';</script>";
          Session::set('msg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
    <strong>Error in setting data!</strong>!</div></div>');

            return $msg;
        }
    }








  // Add New User By Admin
  public function addNewUserByAdmin($data){
    $name = $data['name'];
    $username = $data['username'];
    $email = $data['email'];
    $inputID = $data['inputID'];
    $roleid = $data['roleid'];
    $password = $data['password'];

    $checkUsername = $this->checkExistUsername($username);

    if ($name == "" || $username == "" || $email == "" || $inputID == "" || $password == "" || $securityquestions == "" || $securityanswer == "") {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Input fields must not be Empty !</div></div>';
        return $msg;
    }elseif (strlen($username) < 3) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Username is too short, at least 3 Characters !</div></div>';
        return $msg;
    }elseif (filter_var($inputID,FILTER_SANITIZE_NUMBER_INT) == FALSE) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Numbers and special characters are only usable for this field !</div></div>';
        return $msg;

    }elseif(strlen($password) < 5) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Password at least 6 Characters !</div></div>';
        return $msg;
    }elseif(!preg_match("#[0-9]+#",$password)) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Your password must contain at least 1 number !</div></div>';
        return $msg;
    }elseif(!preg_match("#[a-z]+#",$password)) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Your password must contain at least 1 number !</div></div>';
        return $msg;
    }elseif (filter_var($email, FILTER_VALIDATE_EMAIL === FALSE)) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Invalid email address !</div></div>';
        return $msg;
    }elseif ($checkUsername == TRUE) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Username already Exists, please try another Email... !</div></div>';
        return $msg;
    }else{

      $sql = "INSERT INTO tbl_users(name, username, email, password, inputID, securityquestions, securityanswer, roleid) VALUES(:name, :username, :email, :password, :inputID, :securityquestions, :securityanswer, :roleid)";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':name', $name);
      $stmt->bindValue(':username', $username);
      $stmt->bindValue(':email', $email);
      $stmt->bindValue(':password', SHA1($password));
      $stmt->bindValue(':inputID', $inputID);
      $stmt->bindValue(':securityquestions', $securityquestions);
      $stmt->bindValue(':securityanswer', $securityanswer);
      $stmt->bindValue(':roleid', $roleid);
      $result = $stmt->execute();
      if ($result) {
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Success !</strong> Wow, you have Registered Data Successfully !</div></div>';
          return $msg;
      }else{
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Error !</strong> Oops! Something went Wrong!</div></div>';
          return $msg;
      }
    }
  }


  // Select All User Method
  public function selectAllUserData(){
    $sql = "SELECT * FROM tbl_users ORDER BY id DESC";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  public function selectAllFoundData(){
    $sql = "SELECT * FROM tbl_found ORDER BY id DESC";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  public function selectAllUnClaimedItemData(){
    $sql = "SELECT * FROM `tbl_found` WHERE isClaimed = '0' ORDER BY id DESC";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  public function selectAllClaimedData(){
    $sql = "SELECT * FROM `tbl_claimed`  ORDER BY id DESC";

    $stmt = $this->db->pdo->prepare($sql);
    $result = $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }




  // User login Autho Method
  public function userLoginAutho($username, $password){
    $password = SHA1($password);
    $sql = "SELECT * FROM tbl_users WHERE username = :username and password = :password LIMIT 1";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
  }
  // Check User Account Satatus
  public function CheckActiveUser($username){
    $sql = "SELECT * FROM tbl_users WHERE username = :username and isActive = :isActive LIMIT 1";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':isActive', 1);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
  }




    // User Login Authotication Method
    public function userLoginAuthotication($data){
      $username = $data['username'];
      $password = $data['password'];


      $checkUsername = $this->checkExistUsername($username);

      if ($username == "" || $password == "" ) {
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Error !</strong> Username or Password not be Empty !</div></div>';
          return $msg;
      }elseif ($checkUsername == FALSE) {
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Error!</strong> Username did not found!</div></div>';
          return $msg;
      }else{


        $logResult = $this->userLoginAutho($username, $password);
        $chkActive = $this->CheckActiveUser($username);

        if ($chkActive == TRUE) {
          $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
    <strong>Error !</strong> Sorry, Your account is deactivated, Contact your Admin !</div></div>';
            return $msg;
        }elseif ($logResult) {

          Session::init();
          Session::set('login', TRUE);
          Session::set('id', $logResult->id);
          Session::set('roleid', $logResult->roleid);
          Session::set('name', $logResult->name);
          Session::set('email', $logResult->email);
          Session::set('username', $logResult->username);
          Session::set('securityquestions', $logResult->securityquestions);
          Session::set('securityanswer', $logResult->securityanswer);
          Session::set('logMsg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
    <strong>Success !</strong> You are Logged In Successfully !</div></div>');
          echo "<script>location.href='home.php';</script>";

        }else{
          $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
    <strong>Error !</strong> Username or Password did not Matched !</div></div>';
            return $msg;
        }

      }


    }


    // Get Single User Information By Id Method
    public function getUserInfoById($userid){
      $sql = "SELECT * FROM tbl_users WHERE id = :id LIMIT 1";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':id', $userid);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_OBJ);
      if ($result) {
        return $result;
      }else{
        return false;
      }


    }
    public function getFoundInfoById($userid){
      $sql = "SELECT * FROM tbl_found WHERE id = :id LIMIT 1";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':id', $userid);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_OBJ);
      if ($result) {
        return $result;
      }else{
        return false;
      }
    }
    public function getClaimedInfoById($userid){
      $sql = "SELECT * FROM tbl_claimed WHERE id = :id LIMIT 1";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':id', $userid);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_OBJ);
      if ($result) {
        return $result;
      }else{
        return false;
      }
    }

    public function getInputIdInfoById($userid){
      $sql = "SELECT * FROM tbl_users WHERE inputID = :inputID LIMIT 1";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':inputID', $userid);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_OBJ);
      if ($result) {
        return $result;
      }else{
        return false;
      }
    }

  //
  public function updateFoundByIdInfo($userid, $data){
    $finderNameF = $data['finderNameF'];
    $finderPhoneNumber = $data['finderPhoneNumber'];
    $itemNameF = $data['itemNameF'];
    $itemDescF = $data['itemDescF'];
    $dateFound = $data['dateFound'];
    $locationFoundF = $data['locationFoundF'];



    if ($finderNameF == "" || $finderPhoneNumber == ""|| $itemNameF == "" || $itemDescF == "" || $dateFound == "" || $locationFoundF == "" ) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
<strong>Error !</strong> Input Fields must not be Empty !</div></div>';
        return $msg;
      }elseif (strlen($finderNameF) < 3) {
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Error !</strong> Username is too short, at least 3 Characters !</div></div>';
          return $msg;
      }elseif (filter_var($finderPhoneNumber,FILTER_SANITIZE_NUMBER_INT) == FALSE) {
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Error !</strong>Numbers and special characters are only usable in this field !</div></div>';
          return $msg;


    }elseif (strlen($itemNameF) < 3) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
      <strong>Error !</strong> Username is too short, at least 3 Characters !</div></div>';
        return $msg;
    }else{

      $sql = "UPDATE tbl_found SET
        finderNameF = :finderNameF,
        finderPhoneNumber = :finderPhoneNumber,
        itemNameF = :itemNameF,
        itemDescF = :itemDescF,
        dateFound = :dateFound,
        locationFoundF = :locationFoundF
        WHERE id = :id";
        $stmt= $this->db->pdo->prepare($sql);
        $stmt->bindValue(':finderNameF', $finderNameF);
        $stmt->bindValue(':finderPhoneNumber', $finderPhoneNumber);
        $stmt->bindValue(':itemNameF', $itemNameF);
        $stmt->bindValue(':itemDescF', $itemDescF);
        $stmt->bindValue(':dateFound', $dateFound);
        $stmt->bindValue(':locationFoundF', $locationFoundF);
        $stmt->bindValue(':id', $userid);
        $result = $stmt->execute();
      if ($result) {
        echo "<script>location.href='ListItem.php';</script>";
        Session::set('msg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
        <strong>Success !</strong> Wow, Your Information updated Successfully !</div></div>');
      }else{
        echo "<script>location.href='ListItem.php';</script>";
        Session::set('msg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Error !</strong> Data not inserted !</div></div>');
      }
    }
  }

  public function updateClaimedByIdInfo($userid, $data){
    $claimantName = $data['claimantName'];
    $itemNameC = $data['itemNameC'];
    $itemDescC = $data['itemDescC'];
    $dateClaimed = $data['dateClaimed'];
    $locationFoundC = $data['locationFoundC'];
    $finderNameC = $data['finderNameC'];



    if ( $claimantName == "" || $itemNameC == "" || $itemDescC == "" || $dateClaimed == "" || $locationFoundC == "" || $finderNameC == "" ) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
      <strong>Error !</strong> Input Fields must not be Empty !</div></div>';
          return $msg;
        }elseif (strlen($itemNameC) < 3) {
          $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
      <strong>Error !</strong> Item is too short, at least 3 Characters !</div></div>';
          return $msg;
        }elseif (strlen($itemDescC) < 3){
          $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
      <strong>Error !</strong> Item description is too short!</div></div>';
          return $msg;


    }elseif (strlen($finderNameC) < 3) {
      $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
      <strong>Error !</strong> Finder name is too short, at least 3 Characters !</div></div>';
        return $msg;
    }else{

      $sql = "UPDATE tbl_claimed SET
        claimantName = :claimantName,
        itemNameC = :itemNameC,
        itemDescC = :itemDescC,
        dateClaimed = :dateClaimed,
        locationFoundC = :locationFoundC,
        finderNameC = :finderNameC
        WHERE id = :id";
        $stmt= $this->db->pdo->prepare($sql);
        $stmt->bindValue(':claimantName', $claimantName);
        $stmt->bindValue(':itemNameC', $itemNameC);
        $stmt->bindValue(':itemDescC', $itemDescC);
        $stmt->bindValue(':dateClaimed', $dateClaimed);
        $stmt->bindValue(':locationFoundC', $locationFoundC);
        $stmt->bindValue(':finderNameC', $finderNameC);
        $stmt->bindValue(':id', $userid);
        $result = $stmt->execute();
      if ($result) {
        echo "<script>location.href='ListItem.php';</script>";
        Session::set('msg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
        <strong>Success !</strong> Wow, Your Information updated Successfully !</div></div>');
      }else{
        echo "<script>location.href='ListItem.php';</script>";
        Session::set('msg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Error !</strong> Data not inserted !</div></div>');
      }
    }
  }

  //   Get Single User Information By Id Method
    public function updateUserByIdInfo($userid, $data){
      $name = $data['name'];
      $username = $data['username'];
      $email = $data['email'];
      $inputID = $data['inputID'];
      $securityquestions = $data['securityquestions'];
      $securityanswer = $data['securityanswer'];
      $roleid = $data['roleid'];



      if ($name == "" || $username == ""|| $email == "" || $inputID == "" || $securityquestions == "" || $securityanswer == "" ) {
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Error !</strong> Input Fields must not be Empty !</div></div>';
          return $msg;
        }elseif (strlen($username) < 3) {
          $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
    <strong>Error !</strong> Username is too short, at least 3 Characters !</div></div>';
            return $msg;
        }elseif (filter_var($inputID,FILTER_SANITIZE_NUMBER_INT) == FALSE) {
          $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
    <strong>Error !</strong> Enter only Number Characters for inputID number field !</div></div>';
            return $msg;


      }elseif (filter_var($email, FILTER_VALIDATE_EMAIL === FALSE)) {
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Error !</strong> Invalid email address !</div></div>';
          return $msg;
      }else{

        $sql = "UPDATE tbl_users SET
          name = :name,
          username = :username,
          email = :email,
          inputID = :inputID,
          securityquestions = :securityquestions,
          securityanswer = :securityanswer,
          roleid = :roleid
          WHERE id = :id";
          $stmt= $this->db->pdo->prepare($sql);
          $stmt->bindValue(':name', $name);
          $stmt->bindValue(':username', $username);
          $stmt->bindValue(':email', $email);
          $stmt->bindValue(':inputID', $inputID);
          $stmt->bindValue(':securityquestions', $securityquestions);
          $stmt->bindValue(':securityanswer', $securityanswer);
          $stmt->bindValue(':roleid', $roleid);
          $stmt->bindValue(':id', $userid);
        $result =   $stmt->execute();

        if ($result) {
          echo "<script>location.href='index.php';</script>";
          Session::set('msg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
          <strong>Success !</strong> Wow, Your Information updated Successfully !</div></div>');



        }else{
          echo "<script>location.href='index.php';</script>";
          Session::set('msg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
    <strong>Error !</strong> Data not inserted !</div></div>');


        }


      }


    }




    // Delete User by Id Method
    public function deleteUserById($remove){
      $sql = "DELETE FROM tbl_users WHERE id = :id ";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':id', $remove);
        $result =$stmt->execute();
        if ($result) {
          $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
    <strong>Success !</strong> User account Deleted Successfully !</div></div>';
            return $msg;
        }else{
          $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
    <strong>Error !</strong> Data not Deleted !</div></div>';
            return $msg;
        }
    }
    // Delete Found by Id Method
    public function deleteFoundById($deleteFound){
      $sql = "DELETE FROM tbl_found WHERE id = :id ";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':id', $deleteFound);
        $result =$stmt->execute();
        if ($result) {
          $sql1 = "DELETE FROM tbl_claimed WHERE id = :id ";
          $stmt1 = $this->db->pdo->prepare($sql1);
          $stmt1->bindValue(':id', $deleteFound);
            $result1 =$stmt1->execute();
          $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
    <strong>Success !</strong> Data Deleted Successfully !</div></div>';
            return $msg;
        }else{
          $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
    <strong>Error !</strong> Data not Deleted !</div></div>';
            return $msg;
        }
    }

    // User Deactivated By Admin
    public function userDeactiveByAdmin($deactive){
      $sql = "UPDATE tbl_users SET

       isActive=:isActive
       WHERE id = :id";

       $stmt = $this->db->pdo->prepare($sql);
       $stmt->bindValue(':isActive', 1);
       $stmt->bindValue(':id', $deactive);
       $result =   $stmt->execute();
        if ($result) {
          echo "<script>location.href='admindashboard.php';</script>";
          Session::set('msg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
          <strong>Success !</strong> User account Deactivated Successfully !</div></div>');

        }else{
          echo "<script>location.href='admindashboard.php';</script>";
          Session::set('msg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
    <strong>Error !</strong> Data not deactivated !</div></div>');

            return $msg;
        }
    }


    // User Deactivated By Admin
    public function userActiveByAdmin($active){
      $sql = "UPDATE tbl_users SET
       isActive=:isActive
       WHERE id = :id";

       $stmt = $this->db->pdo->prepare($sql);
       $stmt->bindValue(':isActive', 0);
       $stmt->bindValue(':id', $active);
       $result =   $stmt->execute();
        if ($result) {
          echo "<script>location.href='admindashboard.php';</script>";
          Session::set('msg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
          <strong>Success !</strong> User account activated Successfully !</div></div>');
        }else{
          echo "<script>location.href='admindashboard.php';</script>";
          Session::set('msg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
          <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
    <strong>Error !</strong> Data not activated !</div></div>');
        }
    }


    public function checkExistSecurityQ($userid, $forgotpass_securityquestions){
      $sql = "SELECT securityquestions FROM tbl_users WHERE securityquestions = :securityquestions AND id =:id";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':securityquestions', $forgotpass_securityquestions);
      $stmt->bindValue(':id', $userid);
      $stmt->execute();
      if ($stmt->rowCount()> 0) {
        return true;
      }else{
        return false;
      }
    }
    public function checkExistSecurityA($userid, $forgotpass_securityanswer){
      $sql = "SELECT securityanswer FROM tbl_users WHERE securityanswer = :securityanswer AND id =:id";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':securityanswer', $forgotpass_securityanswer);
      $stmt->bindValue(':id', $userid);
      $stmt->execute();
      if ($stmt->rowCount()> 0) {
        return true;
      }else{
        return false;
      }
    }

    // Check Old password method
    public function CheckOldPassword($userid, $old_pass){
      $old_pass = SHA1($old_pass);
      $sql = "SELECT password FROM tbl_users WHERE password = :password AND id =:id";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':password', $old_pass);
      $stmt->bindValue(':id', $userid);
      $stmt->execute();
      if ($stmt->rowCount() > 0) {
        return true;
      }else{
        return false;
      }
    }

    // Change User pass By Id
    public  function changePasswordBysingelUserId($userid, $data){

      $old_pass = $data['old_password'];
      $new_pass = $data['new_password'];
      $forgotpass_securityquestions = $data['forgot_securityquestions'];
      $forgotpass_securityanswer = $data['forgot_securityanswer'];


      if ($old_pass == "" || $new_pass == "" || $forgotpass_securityquestions == "" || $forgotpass_securityanswer == ""  ) {
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Error!</strong>All fields must not be Empty !</div></div>';
          return $msg;
      }elseif (strlen($new_pass) < 6) {
        $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
        <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
  <strong>Error !</strong> New password must be at least 6 character !</div></div>';
          return $msg;
       }
         $Forgotpass_securityquestions = $this->checkExistSecurityQ($userid, $forgotpass_securityquestions);
         $Forgotpass_securityanswer = $this->checkExistSecurityA($userid, $forgotpass_securityanswer);
         $oldPass = $this->CheckOldPassword($userid, $old_pass);
         if ($oldPass == FALSE) {
           $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
           <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
     <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
     <strong>Error !</strong> Old password do not Matched !</div></div>';
             return $msg;
          }elseif ($Forgotpass_securityquestions == FALSE || $Forgotpass_securityanswer == FALSE) {
              $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
              <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
        <strong></strong>Security Questions and Security Answer do not match!</div></div>';
                return $msg;
          }else{
           $new_pass = SHA1($new_pass);
           $sql = "UPDATE tbl_users SET

            password=:password
            WHERE id = :id";

            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindValue(':password', $new_pass);
            $stmt->bindValue(':id', $userid);
            $result =   $stmt->execute();

          if ($result) {
            echo "<script>location.href='index.php';</script>";
            Session::set('msg', '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
            <i class="fas fa-check-circle" style="font-size:44px; color:green;"></i></i>
      <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
            <strong>Success !</strong> Great news, Password Changed successfully !</div></div>');

          }else{
            $msg = '<div class="alert_frame"><div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
            <i class="fas fa-exclamation-triangle" style="font-size:44px; color:red;"></i>
      <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
      <strong>Error !</strong> Password did not changed !</div></div>';
              return $msg;
        }
      }
    }
}
