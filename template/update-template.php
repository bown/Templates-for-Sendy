<?php
	$templateHtml = mysql_real_escape_string($_POST['html']);
	$templateName = mysql_real_escape_string($_POST['name']);
	$templateId = $_POST['tid'];
	$app = $_POST['id'];
	

	$query = mysql_query("UPDATE templates set name = '$templateName', content = '$templateHtml' WHERE id = '$templateId'") or die(mysql_errno());
	header("Location: /edit-template?i=$app&template=$templateId"); 

?>