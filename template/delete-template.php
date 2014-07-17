<?php include('../includes/functions.php');?>
<?php include('../includes/login/auth.php');?>
<?php 
	$templateId = mysqli_real_escape_string($mysqli, $_GET['template']);
	
	$q = 'UPDATE templates set active = 0 WHERE id = "'.$templateId.'"&& uid = "'.mysqli_real_escape_string($mysqli, $_GET['i']).'"';
	$r = mysqli_query($mysqli, $q);
	header("Location: ".get_app_info('path').'/templates?i='.$_GET['i']); 
?>