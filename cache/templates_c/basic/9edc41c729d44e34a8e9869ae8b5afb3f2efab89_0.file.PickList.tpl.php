<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:07:04
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\List\Field\PickList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66168073e12_01607941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9edc41c729d44e34a8e9869ae8b5afb3f2efab89' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\List\\Field\\PickList.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66168073e12_01607941 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-List-Field-PickList --><?php $_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues(true));
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
if ((isset($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']))) {
$_smarty_tpl->_assignInScope('SEARCH_VALUES', explode('##',\App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'])));
} else {
$_smarty_tpl->_assignInScope('SEARCH_VALUES', array());
}?><div class="picklistSearchField input-group <?php if ((isset($_smarty_tpl->tpl_vars['CLASS_SIZE']->value))) {
echo $_smarty_tpl->tpl_vars['CLASS_SIZE']->value;
}?> u-min-w-150pxr"><select class="select2 listSearchContributor form-control" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" multiple="multiple"<?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveSearchView()) {?>disabled="disabled" data-placeholder=" " <?php }?>title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule()->getName());?>
"data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'<?php if (!empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name'))) {?>data-source-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name');?>
" data-module-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
"<?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_LABEL', false, 'PICKLIST_KEY');
$_smarty_tpl->tpl_vars['PICKLIST_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_LABEL']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_LABEL']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_KEY']->value);?>
" <?php if (in_array($_smarty_tpl->tpl_vars['PICKLIST_KEY']->value,$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value) && ($_smarty_tpl->tpl_vars['PICKLIST_KEY']->value != '')) {?> selected<?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_LABEL']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><!-- /tpl-Base-List-Field-PickList -->
<?php }
}
