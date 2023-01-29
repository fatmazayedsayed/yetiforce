<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:07:04
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\List\Field\Owner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d6616823d5b6_18925123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '608f804c244367db4020ae0fdc9fda619ea2d133' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\List\\Field\\Owner.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d6616823d5b6_18925123 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-List-Field-Owner --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('FIELD_MODULE_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName());
$_smarty_tpl->_assignInScope('ASSIGNED_USER_ID', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
if ((isset($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']))) {
$_smarty_tpl->_assignInScope('SEARCH_VALUE', explode('##',$_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']));
} else {
$_smarty_tpl->_assignInScope('SEARCH_VALUE', array());
}
$_smarty_tpl->_assignInScope('SEARCH_VALUES', array_map("trim",$_smarty_tpl->tpl_vars['SEARCH_VALUE']->value));
if (!App\Config::performance('SEARCH_OWNERS_BY_AJAX')) {
if (!empty($_smarty_tpl->tpl_vars['VIEWID']->value) && App\Config::performance('SEARCH_SHOW_OWNER_ONLY_IN_LIST') && !\App\Config::module($_smarty_tpl->tpl_vars['FIELD_MODULE_NAME']->value,'DISABLED_SHOW_OWNER_ONLY_IN_LIST',false)) {
$_smarty_tpl->_assignInScope('USERS_GROUP_LIST', \App\Fields\Owner::getInstance($_smarty_tpl->tpl_vars['MODULE']->value)->getUsersAndGroupForModuleList($_smarty_tpl->tpl_vars['VIEWID']->value,false,$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFullName()));
$_smarty_tpl->_assignInScope('ALL_ACTIVEUSER_LIST', $_smarty_tpl->tpl_vars['USERS_GROUP_LIST']->value['users']);
$_smarty_tpl->_assignInScope('ALL_ACTIVEGROUP_LIST', $_smarty_tpl->tpl_vars['USERS_GROUP_LIST']->value['group']);
} else {
$_smarty_tpl->_assignInScope('ALL_ACTIVEUSER_LIST', \App\Fields\Owner::getInstance($_smarty_tpl->tpl_vars['FIELD_MODULE_NAME']->value)->getAccessibleUsers());
if ($_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value != 'modifiedby') {
$_smarty_tpl->_assignInScope('ALL_ACTIVEGROUP_LIST', \App\Fields\Owner::getInstance($_smarty_tpl->tpl_vars['FIELD_MODULE_NAME']->value)->getAccessibleGroups());
} else {
$_smarty_tpl->_assignInScope('ALL_ACTIVEGROUP_LIST', array());
}
}
}?><div class="picklistSearchField u-min-w-150pxr"><select class="select2noactive listSearchContributor form-control <?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value;?>
"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" name="<?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value;?>
"multiple="multiple"<?php if (App\Config::performance('SEARCH_OWNERS_BY_AJAX')) {?>data-ajax-search="1" data-ajax-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=Fields&mode=getOwners&fieldName=<?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value;?>
" data-minimum-input="<?php echo App\Config::performance('OWNER_MINIMUM_INPUT_LENGTH');?>
" <?php echo ' ';
}?>data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'<?php if (!empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name'))) {?>data-source-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name');?>
" data-module-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
"<?php }
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveSearchView()) {?>disabled<?php }?>><?php if (App\Config::performance('SEARCH_OWNERS_BY_AJAX')) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SEARCH_VALUES']->value, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_ID']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value) {
$_smarty_tpl->tpl_vars['OWNER_ID']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" selected><?php echo \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['OWNER_ID']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else {
if (count($_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value) > 0) {?><optgroup label="<?php echo \App\Language::translate('LBL_USERS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"data-picklistvalue="<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
" <?php if (in_array(trim(App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value)),$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value) || in_array($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value)) {?> selected <?php }?>data-userId="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php }
if (count($_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value) > 0) {?><optgroup label="<?php echo \App\Language::translate('LBL_GROUPS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"data-picklistvalue="<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
" <?php if (in_array(trim(App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value)),$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value) || in_array($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php }
}?></select></div><!-- /tpl-Base-List-Field-Owner -->
<?php }
}
