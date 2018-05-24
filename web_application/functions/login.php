<?php
session_start();

include("utility.php");
require_once("../core/config.php");

/* Get values from POST */
$loginEmail = $_POST['loginEmail'];
$loginPassword = $_POST['loginPassword'];


/* Create connection to the database */
$db = new PDO($dsn, $login, $passwd, array( 
     PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true)); 

/* Check if the email/pwd combination belong to any account. 
Error if account doesn't exist, or password doesn't belong to the account. */
$checkIfExists = $db->prepare("SELECT * FROM cms_accounts WHERE email = '$loginEmail'");
$checkIfExists->execute();

if($checkIfExists->rowCount()){
    /* There is an account with that email. Check if the password is ok. */
    $accountDetails = $checkIfExists->fetch(PDO::FETCH_LAZY);
    $encryptedPassword = md5($loginPassword);
    
    /* If passwords match, create a session with account ID to make getting details easier. If not, well then, ERROR FLAG! */
   if($encryptedPassword == $accountDetails['password']){
       $_SESSION['loggedIn'] = $accountDetails['id'];
       redirect("/".$parent."?act=index");
   }
    else{
         redirect("/".$parent."?act=login&err=wrong");
    }
}
else{
      redirect("/".$parent."?act=login&err=wrong");
}

?>