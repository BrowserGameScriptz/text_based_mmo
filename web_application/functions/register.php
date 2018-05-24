<?php
include("utility.php");
require_once("../core/config.php");

/* Get form values from POST */
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$registerEmail = $_POST['registerEmail'];
$registerPassword = $_POST['registerPassword'];
$registerPasswordRepeat = $_POST['registerPasswordRepeat'];


/* Create connection to the database */
$db = new PDO($dsn, $login, $passwd, array( 
     PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true)); 


/* Check if the account already exists */
$checkExisting = $db->prepare("SELECT * FROM cms_accounts WHERE email = '$registerEmail'");
$checkExisting->execute();
    
if(!$checkExisting->rowCount()){
    
    /* Prepare the DB insertion with parameters */
    $register = $db->prepare("INSERT INTO cms_accounts (email, password,    first_name, last_name, admin) VALUES (:email, :password, :firstname, :lastname, 0)");
    
    $insertIntoUsers = $db->prepare("INSERT INTO cms_users(bio, nickname, posts) VALUES('', '', 0)");
    
    
    
    /* Check if input passwords are the same, and encrypt the password. If not, return back to Register Page with error flag */
    if($registerPassword == $registerPasswordRepeat){
        $encryptedPassword = md5($registerPassword);
    }
    else{
        redirect("/".$parent."?act=register&err=diff_pwd");
    }

    /* Set values to the parameters from the prepared DB insertion */
    $register->bindParam(':firstname', $firstName);
    $register->bindParam(':lastname', $lastName);
    $register->bindParam(':email', $registerEmail);
    $register->bindParam(':password', $encryptedPassword);
    
    /* Finally, execute the DB insertion, resulting in the created account!     
    Also, insert things into the cms_users table to create the db value for profile settings    */
    $register->execute();
    $insertIntoUsers->execute();
    redirect("/".$parent."?act=register&reg=ok");
    die();

}
else{
    redirect("/".$parent."?act=register&err=exist_acc");
    die();
}

?>