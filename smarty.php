<?php


$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__ . '/templates'); /*look for the templates
in the templates (or whatever folder you call it) folder */
$smarty->setCompileDir(__DIR__ . '/templates_c'); /* it's a configuration folder
a smarty engine, it should compile the templates to the templates_c
you should use this every single time you're building websites. you can save it as a
templates for the future */
$smarty->default_modifiers = array('escape'); /* this is a security thingy I should have on my pages
50% of pages are vulnerable to get attacked without this */

?>
