<?php
/* Smarty version 3.1.30, created on 2016-10-27 14:30:36
  from "/Users/tomaszaricky/Bootcamp/BootcampExercises/Week5/templateExercises/templates/product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5811f36cd3acd0_41489416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebfd0565f4a47003e834a54340005565b7a1b9bf' => 
    array (
      0 => '/Users/tomaszaricky/Bootcamp/BootcampExercises/Week5/templateExercises/templates/product.tpl',
      1 => 1477571433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5811f36cd3acd0_41489416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Product</h1>
<em><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
, <?php echo $_smarty_tpl->tpl_vars['product']->value['color'];?>
</em>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
