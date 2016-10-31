<?php
/* Smarty version 3.1.30, created on 2016-10-27 15:16:28
  from "/Users/tomaszaricky/Bootcamp/BootcampExercises/Week5/templateExercises_27_10/templates/productlist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5811fe2c95eb31_41819419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5909e05592d29e3240f1f22d082db7459dcf78e9' => 
    array (
      0 => '/Users/tomaszaricky/Bootcamp/BootcampExercises/Week5/templateExercises_27_10/templates/productlist.tpl',
      1 => 1477574159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5811fe2c95eb31_41819419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Productlist suckers</h1>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>
  <li><a href="product.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a> is <?php echo $_smarty_tpl->tpl_vars['product']->value['color'];?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
