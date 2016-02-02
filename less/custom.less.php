<?php
error_reporting (E_ALL);
require 'Cache.php';
Less_Cache::$cache_dir = 'cache';

$files = array();

$files['custom.less'] = '/mysite/bootstrap/';

$css_file_name = Less_Cache::Get( $files );

header("Content-Type: text/css");
echo file_get_contents( 'cache/'.$css_file_name );
