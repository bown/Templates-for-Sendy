Templates for Sendy
===========

**Version: 1.0.0**

> **Create and save HTML templates in Sendy to use in campaigns.**

Installation
=====

Once you have downloaded the project you will need to complete the following steps.

Note: ALWAYS back up your Sendy files and database before making any modifications.

### Add Templates to database

Included in this project is an 'install.sql' file, this is required to save templates - if you use phpMyAdmin, import it from your browser.

### Add Files through FTP

Firstly, make a copy of the 'create.php' that already exists in your Sendy installation and upload the 'template' folder, 'create.php' and 'templates.php'

### Add Templates to sidebar

In order to access Templates, add the following code snippet just before the last '</div>' in 'sidebar.php' located in '/includes/'

`<?php include("template/sidebar.php");?>`

Your sidebar.php should look like this 

`<div class="well sidebar-nav">
    <ul class="nav nav-list">
        <li class="nav-header"><?php echo _('Campaigns');?></li>
        <li <?php if(currentPage()=='app.php'){echo 'class="active"';}?>><a href="<?php echo get_app_info('path').'/app?i='.$_GET['i'];?>"><i class="icon-home <?php if(currentPage()=='app.php'){echo 'icon-white';}?>"></i> <?php echo _('All campaigns');?></a></li>
        <li <?php if(currentPage()=='create.php' || currentPage()=='send-to.php' || currentPage()=='edit.php'){echo 'class="active"';}?>><a href="<?php echo get_app_info('path').'/create?i='.$_GET['i'];?>"><i class="icon-edit  <?php if(currentPage()=='create.php' || currentPage()=='send-to.php' || currentPage()=='edit.php'){echo 'icon-white';}?>"></i> Create campaign
    </ul>
    <ul class="nav nav-list">
        <li class="nav-header"><?php echo _('Lists & subscribers');?></li>
        <li <?php if(currentPage()=='list.php' || currentPage()=='subscribers.php' || currentPage()=='new-list.php' || currentPage()=='update-list.php' || currentPage()=='delete-from-list.php' || currentPage()=='edit-list.php' || currentPage()=='custom-fields.php' || currentPage()=='autoresponders-list.php' || currentPage()=='autoresponders-create.php' || currentPage()=='autoresponders-emails.php' || currentPage()=='autoresponders-edit.php' || currentPage()=='autoresponders-report.php'){echo 'class="active"';}?>><a href="<?php echo get_app_info('path').'/list?i='.$_GET['i'];?>"><i class="icon-align-justify  <?php if(currentPage()=='list.php' || currentPage()=='subscribers.php' || currentPage()=='new-list.php' || currentPage()=='update-list.php' || currentPage()=='delete-from-list.php' || currentPage()=='edit-list.php' || currentPage()=='custom-fields.php' || currentPage()=='autoresponders-list.php' || currentPage()=='autoresponders-create.php' || currentPage()=='autoresponders-emails.php' || currentPage()=='autoresponders-edit.php' || currentPage()=='autoresponders-report.php'){echo 'icon-white';}?>"></i> <?php echo _('View all lists');?></a></li>
    </ul>
    <ul class="nav nav-list">
        <li class="nav-header"><?php echo _('Reports');?></li>
        <li <?php if(currentPage()=='report.php' || currentPage()=='reports.php'){echo 'class="active"';}?>><a href="<?php echo get_app_info('path').'/reports?i='.$_GET['i'];?>"><i class="icon-zoom-in  <?php if(currentPage()=='report.php' || currentPage()=='reports.php'){echo 'icon-white';}?>"></i> <?php echo _('See reports');?></a></li>
    </ul>
    <?php include("template/sidebar.php");?>
</div>`


### Complete! 

You can now create templates in Sendy!
