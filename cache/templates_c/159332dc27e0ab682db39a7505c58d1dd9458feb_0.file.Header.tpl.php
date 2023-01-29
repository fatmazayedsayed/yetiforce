<?php
/* Smarty version 4.2.0, created on 2023-01-29 11:55:08
  from 'D:\xampp\htdocs\yetiforce\install\tpl\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d65e9cd94571_96530661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '159332dc27e0ab682db39a7505c58d1dd9458feb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\install\\tpl\\Header.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d65e9cd94571_96530661 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-install-tpl-Header --><!DOCTYPE html><html lang="<?php echo $_smarty_tpl->tpl_vars['HTMLLANG']->value;?>
"><head><title>YetiForce</title><link REL="SHORTCUT ICON" HREF="../<?php echo \App\Layout::getImagePath('favicon.ico');?>
"><?php if (!empty($_smarty_tpl->tpl_vars['IS_IE']->value)) {?><meta http-equiv="x-ua-compatible" content="IE=11,edge"><?php }?><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STYLES']->value, 'cssModel', false, 'index');
$_smarty_tpl->tpl_vars['cssModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['cssModel']->value) {
$_smarty_tpl->tpl_vars['cssModel']->do_else = false;
?><link rel="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getRel();?>
" href="../<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getHref();?>
"><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEADER_SCRIPTS']->value, 'jsModel', false, 'index');
$_smarty_tpl->tpl_vars['jsModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['jsModel']->value) {
$_smarty_tpl->tpl_vars['jsModel']->do_else = false;
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="../<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><style type="text/css">@media print {.noprint {display: none;}}</style><?php echo '<script'; ?>
 type="text/javascript">var CONFIG = <?php echo \App\Config::getJsEnv();?>
;var LANG = <?php echo \App\Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
;<?php echo '</script'; ?>
></head><body data-language="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>
"><input type="hidden" id="start_day" value=""><input type="hidden" id="row_type" value=""><input type="hidden" id="current_user_id" value=""><!-- /tpl-install-tpl-Header -->
<?php }
}
