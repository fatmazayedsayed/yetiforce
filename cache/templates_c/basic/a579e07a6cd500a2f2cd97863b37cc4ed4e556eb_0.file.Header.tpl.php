<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:06:16
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Modals\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66138359ac5_17865329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a579e07a6cd500a2f2cd97863b37cc4ed4e556eb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Modals\\Header.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66138359ac5_17865329 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Modals-Header --><div class="modal js-modal-data <?php if ($_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?>static" data-keyboard="false<?php }?>" tabindex="-1" data-js="data" role="dialog" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalData, 'VALUE', false, 'KEY');
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
?> data-<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><div class="modal-dialog <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalSize;?>
" role="document"><div class="modal-content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_CSS']->value, 'MODEL');
$_smarty_tpl->tpl_vars['MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
$_smarty_tpl->tpl_vars['MODEL']->do_else = false;
?><link rel="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getRel();?>
" href="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getHref();?>
" /><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_SCRIPTS']->value, 'MODEL');
$_smarty_tpl->tpl_vars['MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
$_smarty_tpl->tpl_vars['MODEL']->do_else = false;
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['REGISTER_EVENTS']->value) {
echo '<script'; ?>
 type="text/javascript">app.registerModalController('<?php echo $_smarty_tpl->tpl_vars['MODAL_ID']->value;?>
');<?php echo '</script'; ?>
><?php }?><div class="modal-header<?php if ((isset($_smarty_tpl->tpl_vars['MODAL_VIEW']->value->headerClass))) {?> <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->headerClass;
}?>"><h5 class="modal-title"><?php if ($_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon) {?><span class="modal-header-icon <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon;?>
 mr-2"></span><?php }
echo $_smarty_tpl->tpl_vars['MODAL_TITLE']->value;?>
</h5><?php if (!$_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CANCEL');?>
"><span class="d-print-none"aria-hidden="true">&times;</span></button><?php }?></div><!-- /tpl-Base-Modals-Header -->
<?php }
}
