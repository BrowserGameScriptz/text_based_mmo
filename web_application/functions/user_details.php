    <?php

/* If user is logged in, TIME TO DO SOME USER OPS */
/* This is used in index.php */
if(ISSET($uid)){
    $smarty->assign("uid", $uid);
    $getUserDetails = $db->prepare("SELECT * FROM cms_accounts WHERE id = '$uid'");
    $getUserDetails->execute();
    $userDetails = $getUserDetails->fetch(PDO::FETCH_LAZY);
    $smarty->assign("firstName", $userDetails['first_name']);
    $smarty->assign("lastName", $userDetails['last_name']);
    $smarty->assign("email", $userDetails['email']);
    $smarty->assign("staff", $userDetails['staff']);
   
}

?>
