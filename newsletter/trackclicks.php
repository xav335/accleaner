<?php require_once '../inc/inc.config.php';?>
<?php
require '../admin/classes/Newsletter.php';


if (!empty($_GET['id']) &&  !empty($_GET['target'])){
	$newsletter = new Newsletter();
	$newsletter->journalNewsletterTrackClicks($_GET['id'], $_GET['target']);
	$newsletter = null;
}