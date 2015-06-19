<?php include_once '../inc/inc.config.php'; ?>
<?php 
require 'classes/Authentication.php';
session_start();

$authentication = new Authentication();
if (!isset($_SESSION['accessGranted']) || !$_SESSION['accessGranted']) {
	$result = $authentication->grantAccess($_POST['login'], $_POST['mdp']);
	if (!$result){
		header('Location: /admin/?action=error');
	} else {
		$_SESSION['accessGranted'] = true;
		header('Location: /admin/newsletter-list.php');
	}
}else {
    header('Location: /admin/newsletter-list.php');
}


