<?php
/*
Plugin Name: WPI Enqueue Manager
Description: Selective dequeue script/styles on pages to increase performance of your site
Version: 1.0
Tested up to: WPMU 4.4.2
License: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
Author: Wordpress Index
Author URI: http://phpwpinfo.com
Plugin URI:
tags:enqueue,dequeue,styles,scripts
*/

include(plugin_dir_path( __FILE__ )."/wpi_enqueue_manage.php");
include(plugin_dir_path( __FILE__ )."/wpi_enqueue_manage_meta.php");

$wpi_enqueue_manage=new wpiEnqueueManage();
$wpi_enqueue_manage_meta=new wpiEnqueueManageMeta();
?>
