<?php
session_start();
include("utility.php");
require_once("../core/config.php");
$uid = $_SESSION['loggedIn'];

/* Get form values from POST */
$topicID = $_POST['topicID'];
$uid = $_POST['uid'];
$postText = $_POST['postText'];
$boardID = $_POST['boardID'];
$date = date("Y-m-d");
/* Create connection to the database */
$db = new PDO($dsn, $login, $passwd, array( 
     PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true)); 

if($postText == ""){
    redirect("/".$parent."?act=forum&board=".$boardID."&topic=".$topicID);
}

$createReply = $db->prepare("INSERT INTO cms_forum_posts(post_maker, post_text, date, belongs_to) VALUES(:post_maker, :post_text, :date, :belongs_to)");

$createReply->bindParam(':post_maker', $uid);
$createReply->bindParam(':post_text', $postText);
$createReply->bindParam(':date', $date);
$createReply->bindParam(':belongs_to', $topicID);

$createReply->execute();

print_r($db->errorInfo());
redirect("/".$parent."?act=forum&board=".$boardID."&topic=".$topicID);
?>
