<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:07:31
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Field\Tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66183c1b536_28217014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f8cd925694dfe367e659b423232eedab22c0a36' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\Tree.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66183c1b536_28217014 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-Tree --><?php $_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('DISPLAY_VALUE', \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),false,$_smarty_tpl->tpl_vars['RECORD']->value,true)));?><div class="js-tree-container" data-js="container"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" class="sourceField"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'data-multiple="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() !== 'tree') {?>1<?php } else { ?>0<?php }?>"data-treetemplate="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldParams();?>
" data-module-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
"><?php $_smarty_tpl->_assignInScope('displayId', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?><div class="input-group <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('displaytype') != 10) {?><span class="input-group-prepend clearTreeSelection u-cursor-pointer"><span class="input-group-text"><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_clear" class='fas fa-times-circle' title="<?php echo \App\Language::translate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></span></span><?php }?><input id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
_display" type="text"class="ml-0 treeAutoComplete form-control" <?php if (!empty($_smarty_tpl->tpl_vars['displayId']->value)) {?>readonly="true" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['DISPLAY_VALUE']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('displaytype') != 10) {?>placeholder="<?php echo \App\Language::translate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" <?php }
if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
" <?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }?> /><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('displaytype') != 10) {?><span class="input-group-append js-tree-modal u-cursor-pointer"><span class="input-group-text"><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_select" class="fas fa-search" title="<?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></span></span><?php }?></div></div><!-- /tpl-Base-Edit-Field-Tree -->
<?php }
}
