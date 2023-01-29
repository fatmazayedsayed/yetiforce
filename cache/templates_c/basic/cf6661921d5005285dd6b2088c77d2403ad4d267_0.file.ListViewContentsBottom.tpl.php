<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:07:04
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\ListViewContentsBottom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66168573c94_81585828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf6661921d5005285dd6b2088c77d2403ad4d267' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\ListViewContentsBottom.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66168573c94_81585828 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-ListViewContentsBottom --><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value == '0') {?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo \App\Language::translate('LBL_RECORDS_NO_FOUND');?>
. <?php if ($_smarty_tpl->tpl_vars['IS_MODULE_EDITABLE']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateRecordUrl();?>
"><?php echo \App\Language::translate('LBL_CREATE_SINGLE_RECORD');?>
</a><?php }?></td></tr></tbody></table><?php }?><!-- /tpl-Base-ListViewContentsBottom -->
<?php }
}
