<?php


$config = array(

//URL
'url_base' => 'http://www.bootcamp-eshop.local',

//database
'db_host' => 'localhost',
'db_database' => 'classproject',
'db_user' => 'root',
'db_pass' => '',
'db_charset' => 'utf8',

//smarty
'smarty_config_dir' => config::get('smarty_template_dir'),
'smarty_template_dir' => config::get(VIEWS_DIR),
'smarty_compile_dir' => config::get('smarty_config_dir'),
'smarty_cache_dir' => config::get('smarty_cache_dir'),

);
?>
