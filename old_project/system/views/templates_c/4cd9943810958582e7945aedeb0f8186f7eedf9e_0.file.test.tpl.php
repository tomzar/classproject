<?php
/* Smarty version 3.1.30, created on 2016-10-27 11:57:43
  from "/Users/tomaszaricky/Bootcamp/BootcampExercises/Week5/templateExercises/templates/test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5811cf97aef919_26909928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cd9943810958582e7945aedeb0f8186f7eedf9e' => 
    array (
      0 => '/Users/tomaszaricky/Bootcamp/BootcampExercises/Week5/templateExercises/templates/test.tpl',
      1 => 1477562262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5811cf97aef919_26909928 (Smarty_Internal_Template $_smarty_tpl) {
?>
<strong><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</strong>
<em><?php echo $_smarty_tpl->tpl_vars['address']->value['street'];?>
, <?php echo $_smarty_tpl->tpl_vars['address']->value['city'];?>
</em>

<!-- . is not for concatenation but what i want from an array -->
<?php }
}
