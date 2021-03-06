<?php
// we will define how our project basically looks like, to keep the track of all the files that I need.

define('SYSTEM_DIR', DOCROOT. '/system');

define('CONFIG_DIR', SYSTEM_DIR. '/config'); //config - for the project configuration

define('CONTROLLERS_DIR', SYSTEM_DIR. '/controllers'); // for the page controllers

define('LIBRARIES_DIR', SYSTEM_DIR. '/libraries'); // for all globablly usable classes

define('MODELS_DIR', SYSTEM_DIR. '/models'); // for classes that handle the database communication

define('VENDOR_DIR', SYSTEM_DIR. '/vendor'); // vendor - for libraries included from 3rd party vendor

define('VIEWS_DIR', SYSTEM_DIR. '/views'); // this where the templates will go to.

define('CACHE_DIR', SYSTEM_DIR. '/cache'); // a folder for php script for my project for the files that the script
                                          // generates itself, like for example smarty templates, for cached Files
                                          // generated by the system itself

require_once(LIBRARIES_DIR.'/config.class.php');
//router
require_once(LIBRARIES_DIR.'/router.class.php');
//vendor autoload
require_once(VENDOR_DIR.'/autoload.php');
require_once(LIBRARIES_DIR.'/db.class.php');

//load the configuration of our project
config::load();

$smarty = new Smarty();

$smarty->setTemplateDir(VIEWS_DIR);
$smarty->setCompileDir(CACHE_DIR.'/smarty_chache');
$smarty->setConfigDir(CONFIG_DIR.'/smarty_config');
$smarty->setCacheDir(CACHE_DIR.'/smarty_compile');






?>
