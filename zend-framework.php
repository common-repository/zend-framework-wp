<?php
/*
Plugin Name: Zend Framework for Wordpress
Plugin URI: http://opensourcetechnologies.com/
Description: Simply make Zend Framework libraries available on a Wordpress instance.
Version: 1.0
Author: opensourcetech
Author URI: http://opensourcetechnologies.com/
*/

function zend_framework_init()
{
	set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) );

	define('WP_ZEND_FRAMEWORK', true);

	zend_framework_register_autoload();
}

function zend_framework_register_autoload()
{
	require_once 'Zend/Loader/Autoloader.php';
	$autoloader = Zend_Loader_Autoloader::getInstance();
}

add_action('plugins_loaded', 'zend_framework_init');
