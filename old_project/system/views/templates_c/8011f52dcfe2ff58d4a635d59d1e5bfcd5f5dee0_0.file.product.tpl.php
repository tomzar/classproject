<?php
/* Smarty version 3.1.30, created on 2016-10-27 15:23:41
  from "/Users/tomaszaricky/Bootcamp/BootcampExercises/Week5/templateExercises_27_10/templates/product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5811ffdd50ebe6_19570581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8011f52dcfe2ff58d4a635d59d1e5bfcd5f5dee0' => 
    array (
      0 => '/Users/tomaszaricky/Bootcamp/BootcampExercises/Week5/templateExercises_27_10/templates/product.tpl',
      1 => 1477574166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5811ffdd50ebe6_19570581 (Smarty_Internal_Template $_smarty_tpl) {
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
