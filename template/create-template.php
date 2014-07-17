<div class="row-fluid">
	<h2>Create Templates</h2><br/>
    		<form action="<?php echo get_app_info('path')?>/template/save-template.php?i=<?php echo get_app_info('app')?>" method="POST" accept-charset="utf-8" class="form-vertical" id="create-template" enctype="multipart/form-data">
			    <div class="span3">
				    
			    	<label class="control-label" for="name">Template Name</label>
			    	<div class="control-group">
				    	<div class="controls">
			              <input type="text" class="input-xlarge" id="name" name="name" placeholder="[country]_sendy_*">
			            </div>
			        </div>
			        <input type="hidden" name="id" value="<?php echo $_GET['i'];?>">
			        <button type="submit" class="btn btn-inverse"><i class="icon-ok icon-white"></i> Save</button>
			        
			    </div>   
			    <div class="span9">
			    	<p>
				    	<label class="control-label" for="html"><?php echo _('HTML code');?></label>
				    	<div class="btn-group">
				    	<span class="wysiwyg-note">The HTML may look odd in this editor, open it in the campaign to see how it actually looks.</span>
						<script type="text/javascript">
							$("#toggle-wysiwyg").click(function(e){
								e.preventDefault();
								
								$('<input>').attr({
								    type: 'hidden',
								    id: 'wysiwyg',
								    name: 'wysiwyg',
								    value: '0',
								}).appendTo("#edit-form");
								
								$('<input>').attr({
								    type: 'hidden',
								    id: 'w_clicked',
								    name: 'w_clicked',
								    value: '1',
								}).appendTo("#edit-form");
								
								$("#subject").rules("remove");
								$("#html").rules("remove");
								if($("#subject").val()=="") $("#subject").val("Untitled");
								
								$("#edit-form").submit();
							});
						</script>
						</div>
						<br/>
			            <div class="control-group">
					    	<div class="controls">
				              <textarea class="input-xlarge" id="html" name="html" rows="10" placeholder="Email content"></textarea>
				            </div>
				        </div>
				    	<p><?php echo _('Use the following tags in your subject, plain text or HTML code and they\'ll automatically be formatted when your campaign is sent. For web version and unsubscribe tags, you can style them with inline CSS.');?></p><br/>
				    	<div class="row-fluid">
					    	<div class="span6">
						    	<h3><?php echo _('Essential tags (HTML only)');?></h3>
						    	<?php echo _('The following tags can only be used on the HTML version');?><br/><br/>
						    	<p><strong><?php echo _('Webversion link');?>: </strong><br/><code class="sel">&lt;webversion&gt;<?php echo _('View web version');?>&lt;/webversion&gt;</code></p>
						    	<p><strong><?php echo _('Unsubscribe link');?>: </strong><br/><code class="sel">&lt;unsubscribe&gt;<?php echo _('Unsubscribe here');?>&lt;/unsubscribe&gt;</code></p>
						    	<br/>
						    	<h3><?php echo _('Essential tags');?></h3>
						    	<?php echo _('The following tags can be used on both Plain text or HTML version');?><br/><br/>
						    	<p><strong><?php echo _('Webversion link');?>: </strong><br/><code class="sel">[webversion]</code></p>
						    	<p><strong><?php echo _('Unsubscribe link');?>: </strong><br/><code class="sel">[unsubscribe]</code></p>
						    	<br/>
					    	</div>
					    	<div class="span6">
						    	<h3><?php echo _('Personalization tags');?></h3>
						    	<?php echo _('The following tags can be used on both Plain text or HTML version');?><br/><br/>
						    	<p><strong><?php echo _('Name');?>: </strong><br/><code class="sel">[Name,fallback=]</code></p>
						    	<p><strong><?php echo _('Email');?>: </strong><br/><code class="sel">[Email]</code></p>
						    	<p><strong><?php echo _('Two digit day of the month (eg. 01 to 31)');?>: </strong><br/><code class="sel">[currentdaynumber]</code></p>
						    	<p><strong><?php echo _('A full textual representation of the day (eg. Friday)');?>: </strong><br/><code class="sel">[currentday]</code></p>
						    	<p><strong><?php echo _('Two digit representation of the month (eg. 01 to 12)');?>: </strong><br/><code class="sel">[currentmonthnumber]</code></p>
						    	<p><strong><?php echo _('Full month name (eg. May)');?>: </strong><br/><code class="sel">[currentmonth]</code></p>
						    	<p><strong><?php echo _('Four digit representation of the year (eg. 2014)');?>: </strong><br/><code class="sel">[currentyear]</code></p>
						    	<br/>
						    	<h3><?php echo _('Custom field tags');?></h3><br/>
						    	<p><?php echo _('You can also use custom fields to personalize your newsletter, eg.');?> <code class="sel">[Country,fallback=anywhere in the world]</code>.</p>
						    	<p><?php echo _('To manage or get a reference of tags from custom fields, go to any subscriber list. Then click \'Custom fields\' button at the top right.');?></p>
					    	</div>
					    	<script type="text/javascript">
							$(document).ready(function() {
								$(".sel").click(function(){
									$(this).selectText();
								});
							});
							</script>
				    	</div>
			    	</p>
			    </div> 
			 </form>
		</div>