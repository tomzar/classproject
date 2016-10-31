<?php
/* Smarty version 3.1.30, created on 2016-10-27 14:30:38
  from "/Users/tomaszaricky/Bootcamp/BootcampExercises/Week5/templateExercises/templates/contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5811f36e94ff75_89104832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bebfd90b3ccabe55310f4d4baeb04c0fba960509' => 
    array (
      0 => '/Users/tomaszaricky/Bootcamp/BootcampExercises/Week5/templateExercises/templates/contact.tpl',
      1 => 1477571425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5811f36e94ff75_89104832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Address</h1>
<em><?php echo $_smarty_tpl->tpl_vars['address']->value['name'];?>
, <?php echo $_smarty_tpl->tpl_vars['address']->value['city'];?>
</em>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
