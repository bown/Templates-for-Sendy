<?php include('includes/header.php');?>
<?php include('includes/login/auth.php');?>
<?php include('includes/list/main.php');?>
<?php
	if(get_app_info('is_sub_user')) 
	{
		if(get_app_info('app')!=get_app_info('restricted_to_app'))
		{
			echo '<script type="text/javascript">window.location="'.get_app_info('path').'/list?i='.get_app_info('restricted_to_app').'"</script>';
			exit;
		}
	}
?>
<script src="<?php echo get_app_info('path');?>/js/redactor/redactor.min.js?5"></script>
<script src="<?php echo get_app_info('path');?>/js/redactor/fontcolor.js?5"></script>
<script src="<?php echo get_app_info('path');?>/js/redactor/fontsize.js?5"></script>
<script src="<?php echo get_app_info('path');?>/js/redactor/fontfamily.js?5"></script>
<script src="<?php echo get_app_info('path');?>/js/redactor/personalizationtags.js?5"></script>
<link rel="stylesheet" href="<?php echo get_app_info('path');?>/js/redactor/redactor.css?5" />
<script src="<?php echo get_app_info('path');?>/js/create/editor.js?2"></script>

<!-- Validation -->
<script type="text/javascript" src="<?php echo get_app_info('path');?>/js/validate.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#create-template").validate({
			rules: {
				name: {
					required: true	
				},
				html: {
					required: true
				}
			},
			messages: {
				name: "<?php echo addslashes(_('The title of your template is required'));?>",
				html: "<?php echo addslashes(_('Your HTML code is required'));?>"
			}
		});
		$("#edit-template").validate({
			rules: {
				name: {
					required: true	
				},
				html: {
					required: true
				}
			},
			messages: {
				name: "<?php echo addslashes(_('The title of your template is required'));?>",
				html: "<?php echo addslashes(_('Your HTML code is required'));?>"
			}
		});
	});
</script>

<div class="row-fluid">
    <div class="span2">
        <?php include('includes/sidebar.php');?>
    </div> 
    <div class="span10">
    	<div>
	    	<p class="lead"><?php echo get_app_data('app_name');?></p>
    	</div>
    	<?php if(isset($_GET['do']) && $_GET['do'] == "create") {include("template/create-template.php"); } elseif(isset($_GET['do']) && $_GET['do'] == "edit") { include("template/edit-template.php"); } elseif(isset($_GET['do']) && $_GET['do'] == "campaign") { include("template/select-template.php"); } else {?>
    	<h2>My Templates</h2><br/>
    	<p><button class="btn" onclick="window.location='<?php echo get_app_info('path');?>/templates?i=<?php echo get_app_info('app');?>&do=create'"><i class="icon-plus-sign"></i> Add new template</button></p>
	    <table class="table table-striped responsive">
		  <thead>
		    <tr>
		      <th>Template Name</th>
		      <th>Edit</th>
		      <th>Delete</th>
	
		    </tr>
		  </thead>
		  <tbody>
		  	
		  	<?php
		  	$q = 'SELECT * FROM templates WHERE active = 1 && uid ="'.mysqli_real_escape_string($mysqli, $_GET['i']).'"';
		  	$r = mysqli_query($mysqli, $q);
		  	if(mysqli_num_rows($r) > 0) {
		  		while($i = mysqli_fetch_array($r)) {
		  			echo "<tr><td>".$i['name']."</td>
		  				<td><a href='templates?i=".$_GET['i']."&do=edit&template=".$i['id']."'><i class=\"icon icon-pencil\"></i></a></td>
		  				<td><a href='template/delete-template.php?i=".$_GET['i']."&template=".$i['id']."'><i class=\"icon icon-trash\"></i></a></td>
		  			</tr>";
		  		}
		  	}
		  	else {
		  		echo "<td>No Templates!</td><td></td>";
		  	}
		  	?>
		    
		  </tbody>
		</table>
		<?php }?>		
    </div>   
</div>
<?php include('includes/footer.php');?>
