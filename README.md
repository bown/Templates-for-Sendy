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

Firstly, make a copy of the 'create.php' that already exists in your Sendy installation and upload the 'template' folder, 'create.php' and 'templates.php' from this project, note that uploading will prompt to overwrite 'create.php', choose yes as you've made a copy of the original.

### Add Templates to sidebar

In order to access Templates, add the following code snippet just before the last closing DIV in 'sidebar.php' located in '/includes/'

`<?php include("template/sidebar.php");?>`

### Complete! 

You can now create templates in Sendy!
