<?php
/* Smarty version 4.2.0, created on 2023-01-29 12:06:07
  from 'D:\xampp\htdocs\yetiforce\install\tpl\JSResources.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d6612f0fca64_40804682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e43368cc2261f41e71541cff30562de0edbac78c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\install\\tpl\\JSResources.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d6612f0fca64_40804682 (Smarty_Internal_Template $_smarty_tpl) {
?><div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FOOTER_SCRIPTS']->value, 'jsModel', false, 'index');
$_smarty_tpl->tpl_vars['jsModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['jsModel']->value) {
$_smarty_tpl->tpl_vars['jsModel']->do_else = false;
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="../<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
<?php }
}
