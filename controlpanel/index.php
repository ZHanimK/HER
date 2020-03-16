<?php 
ob_start();
session_start();
include '../settings/connect-db.php';

$usercheck=$db->prepare("SELECT * FROM users where user_id=:user_id");
$usercheck->execute(array(
  'user_id' => $_SESSION['user_id']
  ));
$userinfo=$usercheck->fetch(PDO::FETCH_ASSOC);
if (!isset($_SESSION['email'])) {

  Header("Location:../404.html");
  exit;

}
if ($userinfo['who']==1) {
    header("Location:her-info.php");
} elseif ($userinfo['who']==2) {
    header("Location:mentor-info.php");
} elseif ($userinfo['who']==3) {
    header("Location:empprofile.php");
} elseif ($userinfo['who']==4) {
    header("Location:organisationprofile.php");

}

 ?>