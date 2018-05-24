<?php
/**
 * BackpackCMS
 *
 * @package backpack-cms
 */
session_start();


//-1 flag user is not logged
/* If the user is logged in, we set a global variable $uid using his account ID. */
if(ISSET($_SESSION['loggedIn'])){
    $uid = $_SESSION['loggedIn'];
}

require 'libs/SmartyBC.class.php';
//require 'libs/Smarty.class.php';

$smarty = new SmartyBC;

require_once('./core/config.php');

$db = new PDO($dsn, $login, $passwd, array( 
     PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true)); 

$news = $db->prepare("select * from cms_news order by id desc"); 
$news->execute(); 
$news->setFetchMode(PDO::FETCH_LAZY); 

$smarty->assign("news", $news);



/*
*   The lines below are quite important to be in the index.php file,
*   as they will set the name of the website, the motto, header text
*   announcement, include important function files and also the base
*   .tpl ones, and the function which loads .tpl files from the ?act
*   link param
*/

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

/* Get details about the CMS from the DB */
$getCMSDetails = $db->prepare("SELECT * FROM cms_settings");
$getCMSDetails->execute();
$BackpackCMS = $getCMSDetails->fetch(PDO::FETCH_LAZY);

$smarty->assign("title", $BackpackCMS['cms_name']);
$smarty->assign("name", $BackpackCMS['catch_phrase']);
$smarty->assign("headerText", $BackpackCMS['cms_name'].' - '.$BackpackCMS['catch_phrase']);;

/* Use this only if important announcement exists. Only manual, for now. */
if($BackpackCMS['announcement_text'] != ""){
    $smarty->assign("announcement", $BackpackCMS['announcement_text'] );
}

include('./functions/user_details.php');

/* We create here the way navigating through pages actually works with those fancy links */
$pg = "index";
if(ISSET($_GET['act'])){
    $pg = $_GET['act'];
    
    if($pg == "logout"){
        session_destroy();
        $permanent = false;
        header('Location: ?act=index', true, $permanent ? 301 : 302);
        
    }
}

/* Script to show one news post, expanded, on the index, with all the details, if one is clicked */
if(ISSET($_GET['news'])){
    $newsID = $_GET['news'];
    $smarty->assign('newsID', $newsID);
}

if(isset($_GET['board'])){
    $boardID = $_GET['board'];
    $smarty->assign('boardID', $boardID);
}

if(isset($_GET['topic'])){
    $topicID = $_GET['topic'];
    $smarty->assign('topicID', $topicID);
}


/*  GET FORUM RELATED CONTENT   */
$getForumCats = $db->prepare("SELECT * FROM cms_forum_categories");
$getForumBoards = $db->prepare("SELECT * FROM cms_forum_boards");
$getForumTopics = $db->prepare("SELECT * FROM cms_forum_topics");
$getForumPosts = $db->prepare("SELECT * FROM cms_forum_posts ORDER BY id ASC");
$getUsers = $db->prepare("SELECT * FROM cms_accounts");

$getForumCats->execute();
$getForumBoards->execute();
$getForumTopics->execute();
$getForumPosts->execute();
$getUsers->execute();

$getForumCats->setFetchMode(PDO::FETCH_LAZY); 
$getForumBoards->setFetchMode(); 
$getForumTopics->setFetchMode(PDO::FETCH_LAZY); 
$getForumPosts->setFetchMode(PDO::FETCH_LAZY); 
$getUsers->setFetchMode();

$forumBoards = $getForumBoards->fetchAll();
$forumUsers = $getUsers->fetchAll();

$smarty->assign("forumCats", $getForumCats);
$smarty->assign("forumBoards", $forumBoards);
$smarty->assign("forumTopics", $getForumTopics);
$smarty->assign("forumPosts", $getForumPosts);
$smarty->assign("users", $forumUsers);

/*  END OF FORUM RELATED CONTENT    */

$smarty->display('header.tpl');
$smarty->display('topnav.tpl');
$smarty->display($pg.'.tpl');
$smarty->display('footer.tpl');
