<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:06:30
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\VisitPurpose.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66146510901_33488718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c87291833002a83774df79bc84bcd57814558dc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\VisitPurpose.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66146510901_33488718 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-VisitPurpose --><form name="VisitPurpose" class="form-horizontal validateForm"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="VisitPurpose" /><div class="modal-body"><div class="row"><div class="col-md-12"><textarea id="visitPurpose" maxlength="501" class="" name="visitPurpose" data-validation-engine="validate[required,maxSize[500]]"></textarea></div></div><?php if (!$_smarty_tpl->tpl_vars['CURRENT_USER']->value->isSuperUser()) {?><div class="alert alert-primary" role="alert"><span class="mdi mdi-information-outline u-fs-4x mr-2 float-left"></span><?php echo \App\Language::translate("LBL_VISIT_PURPOSE_ALERT");?>
</div><?php }?></div></form><!-- /tpl-Users-VisitPurpose -->
<?php }
}
