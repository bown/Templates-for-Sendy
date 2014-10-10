Templates for Sendy
===========

**Version: 1.0.3**

> **Create and save HTML templates in Sendy to use in campaigns.**

Installation
=====

Once you have downloaded the project you will need to complete the following steps.

Note: ALWAYS back up your Sendy files and database before making any modifications.

### Add Templates to database

Included in this project is an 'install.sql' file, this is required to save templates - if you use phpMyAdmin, import it from your browser.

### Add Files through FTP

Version 1.0.3 no longer needs the use of 'create.php', so any updates to Sendy are not affected by Templates. Upload the 'template' folder, 'templates.php' and 'template_create.php' to your Sendy folder.

~~Firstly, make a copy of the 'create.php' that already exists in your Sendy installation and upload the 'template' folder, 'create.php' and 'templates.php' from this project, note that uploading will prompt to overwrite 'create.php', choose yes as you've made a copy of the original.~~

### Add Templates to sidebar

In order to access Templates, add the following code snippet just before the last closing DIV in 'sidebar.php' located in '/includes/'

    <?php include("template/sidebar.php");?>

### Add rule to .htaccess

Add the following to the end of the '.htaccess' file located in the sendy folder.

    # template
    RewriteRule ^templates/(.*)$ templates.php?i=$1 [L]
    RewriteRule ^template_create/(.*)$ template_create.php?i=$1 [L]

### Complete! 

You can now create templates in Sendy!
