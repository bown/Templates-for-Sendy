<div class="span10">
    	<div class="row-fluid">
	    	<h2>Select a Template</h2><br/>
    	</div>
    	<div class="row-fluid">
    	<?php 
    	$q = 'SELECT * FROM templates WHERE active = 1 && uid ="'.mysqli_real_escape_string($mysqli, $_GET['i']).'"';
    	$r = mysqli_query($mysqli, $q);
				if(mysqli_num_rows($r) > 0) {
    	?>
    		<form action="<?php echo get_app_info('path').'/template_create.php?i='.$_GET['i'];?>" method="POST" accept-charset="utf-8" class="form-vertical" id="edit-form" enctype="multipart/form-data">
			    <div class="span3">
			        <label class="control-label" for="attachments">Template Name</label>
		            <div class="control-group">
				    	<div class="controls">
				    		<select name="template">
				    			<?php
				    				while($i = mysqli_fetch_array($r)) {
				    					echo "<option value=\"".htmlspecialchars($i['name'])."\">".$i['name'] . "</option>";
				    				}
				    			?>
				    		</select>
			            </div>
			        </div><br/>
			        
			        <button type="submit" class="btn btn-inverse"><i class="icon-ok icon-white"></i> Create</button>
			        </div>  
			 		</form>
			        <?php } else { ?>
				    	<p>No Templates Available, you need to create one first!</p>
				    <?php } ?>
			        
		</div>
	</div>