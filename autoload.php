<?php
$options = parse_ini_file("config.ini");

define('MYSQL_HOST', $options['mysql_host']);
define('MYSQL_USER', $options['mysql_user']);
define('MYSQL_PASS', $options['mysql_pass']);
define('BANCO_SERVER', $options['mysql_db']['l2']);
define('BANCO_WEB', $options['mysql_db']['web']);
define('CLASS_DIR', 'includes/lib');

set_include_path(get_include_path() . PATH_SEPARATOR . CLASS_DIR);

spl_autoload_extensions(".php"); 
spl_autoload_register();
