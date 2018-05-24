<?php
session_start();
include("utility.php");
require_once("../core/config.php");
$uid = $_SESSION['loggedIn'];

/* Get form values from POST */
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$settPassword = $_POST['passwordChange'];
$settPasswordRepeat = $_POST['passwordChangeRepeat'];
$userBio = $_POST['userAbout'];
$pwdEnc = "";

/* Create connection to the database */
$db = new PDO($dsn, $login, $passwd, array( 
     PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true)); 

/* Prepare the queries */
$setfName = $db->prepare("UPDATE cms_accounts SET first_name = '$firstName' WHERE id = '$uid'");

$setlName = $db->prepare("UPDATE cms_accounts SET last_name = '$lastName' WHERE id = '$uid'");

$setPwd = $db->prepare("UPDATE cms_accounts SET password = '$pwdEnc' WHERE id = '$uid'");

$setBio = $db->prepare("UPDATE cms_users SET bio = '$userBio' WHERE id = '$uid'");

if($settPassword !=""){
    if($settPassword != $settPasswordRepeat){
         redirect("/".$parent."?act=accsett&err=pwd");
         die();
    }
    else{
        $pwdEnc = md5($settPassword);

            $setPwd -> execute();
    }
}

if($firstName!= ""){
    $setfName -> execute();
}

if($lastName!=""){
    $setlName -> execute();
}

if($userBio!=""){
    $setBio -> execute();
}

redirect("/".$parent."?act=accsett");
     die();


?>
