<?php
session_start();
include("utility.php");
require_once("../core/config.php");
$uid = $_SESSION['loggedIn'];

/* Get form values from POST */

$uid = $_POST['uid'];
$topicText = $_POST['topicText'];
$topicTitle = $_POST['topicTitle'];
$boardID = $_POST['boardID'];
$date = date("Y-m-d");



/* Create connection to the database */
$db = new PDO($dsn, $login, $passwd, array( 
     PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true)); 

if($topicText == ""){
    redirect("/".$parent."?act=topic_create&board=".$boardID);
}

$createTopic = $db->prepare("INSERT INTO cms_forum_topics(title, topic_creator, topic_text, date, belongs_to) VALUES(:title, :topic_creator, :topic_text, :date, :belongs_to)");

$createTopic->bindParam(':title', $topicTitle);
$createTopic->bindParam(':topic_creator', $uid);
$createTopic->bindParam(':topic_text', $topicText);
$createTopic->bindParam(':date', $date);
$createTopic->bindParam(':belongs_to', $boardID);

$createTopic->execute();

print_r($db->errorInfo());
redirect("/".$parent."?act=forum&board=".$boardID);
?>
