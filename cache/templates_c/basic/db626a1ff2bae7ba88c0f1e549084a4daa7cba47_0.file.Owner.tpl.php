<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:07:31
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Field\Owner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66183e96cb5_10517616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db626a1ff2bae7ba88c0f1e549084a4daa7cba47' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\Owner.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66183e96cb5_10517616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'OPTGRUOP' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\yetiforce\\cache\\templates_c\\basic\\db626a1ff2bae7ba88c0f1e549084a4daa7cba47_0.file.Owner.tpl.php',
    'uid' => 'db626a1ff2bae7ba88c0f1e549084a4daa7cba47',
    'call_name' => 'smarty_template_function_OPTGRUOP_91214071163d66183e2e480_59099022',
  ),
));
?><!-- tpl-Base-Edit-Field-Owner --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '53') {
$_smarty_tpl->_assignInScope('ROLE_RECORD_MODEL', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getRoleDetail());
$_smarty_tpl->_assignInScope('OWNER_FIELD', \App\Fields\Owner::getInstance($_smarty_tpl->tpl_vars['MODULE_NAME']->value));
$_smarty_tpl->_assignInScope('ALL_ACTIVEUSER_LIST', $_smarty_tpl->tpl_vars['OWNER_FIELD']->value->getAccessibleUsers('',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()));
$_smarty_tpl->_assignInScope('ALL_ACTIVEGROUP_LIST', $_smarty_tpl->tpl_vars['OWNER_FIELD']->value->getAccessibleGroups('',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(),true));
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('CURRENT_USER_ID', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('id'));
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value == '' && (isset($_smarty_tpl->tpl_vars['VIEW']->value)) && $_smarty_tpl->tpl_vars['VIEW']->value != 'MassEdit') {
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value);
}
$_smarty_tpl->_assignInScope('SHOW_FAVORITE_OWNERS', App\Config::module('Users','FAVORITE_OWNERS') && $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value === \App\User::getCurrentUserRealId());
$_smarty_tpl->_assignInScope('FAVORITE_OWNERS', array());?><div class="w-100"><select class="select2 form-control <?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }?> <?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser() == false && $_smarty_tpl->tpl_vars['ROLE_RECORD_MODEL']->value->get('changeowner') == 0) {?>readonly="readonly" <?php }
if (App\Config::performance('SEARCH_OWNERS_BY_AJAX')) {?>data-ajax-search="1" data-ajax-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=Fields&mode=getOwners&fieldName=<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-minimum-input="<?php echo App\Config::performance('OWNER_MINIMUM_INPUT_LENGTH');?>
"<?php } elseif ($_smarty_tpl->tpl_vars['SHOW_FAVORITE_OWNERS']->value) {?>data-select-cb="registerIconsEvents" data-template-result="prependDataTemplate" data-template-selection="prependDataTemplate" data-select-cb="mycb"<?php }?>><?php if (!App\Config::performance('SEARCH_OWNERS_BY_AJAX')) {
$_smarty_tpl->_assignInScope('FOUND_SELECT_VALUE', (isset($_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value[$_smarty_tpl->tpl_vars['FIELD_VALUE']->value])) || (isset($_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value[$_smarty_tpl->tpl_vars['FIELD_VALUE']->value])));
if ((isset($_smarty_tpl->tpl_vars['VIEW']->value)) && $_smarty_tpl->tpl_vars['VIEW']->value == 'MassEdit') {?><optgroup class="p-0"><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
</option></optgroup><?php }
if (App\Config::module('Users','FAVORITE_OWNERS')) {
$_smarty_tpl->_assignInScope('FAVORITE_OWNERS', $_smarty_tpl->tpl_vars['OWNER_FIELD']->value->getFavorites($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()));
if ($_smarty_tpl->tpl_vars['FAVORITE_OWNERS']->value) {
$_smarty_tpl->_assignInScope('FAVORITE_OWNERS', array_intersect_key($_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value,$_smarty_tpl->tpl_vars['FAVORITE_OWNERS']->value)+array_intersect_key($_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value,$_smarty_tpl->tpl_vars['FAVORITE_OWNERS']->value));
$_smarty_tpl->_assignInScope('ALL_ACTIVEUSER_LIST', array_diff_key($_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value,$_smarty_tpl->tpl_vars['FAVORITE_OWNERS']->value));
$_smarty_tpl->_assignInScope('ALL_ACTIVEGROUP_LIST', array_diff_key($_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value,$_smarty_tpl->tpl_vars['FAVORITE_OWNERS']->value));
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'OPTGRUOP', array('BLOCK_NAME'=>'LBL_FAVORITE_OWNERS','OWNERS'=>$_smarty_tpl->tpl_vars['FAVORITE_OWNERS']->value,'ACTIVE'=>'active'), true);
}
}
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'OPTGRUOP', array('BLOCK_NAME'=>'LBL_USERS','OWNERS'=>$_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value), true);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'OPTGRUOP', array('BLOCK_NAME'=>'LBL_GROUPS','OWNERS'=>$_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value), true);
if (!empty($_smarty_tpl->tpl_vars['FIELD_VALUE']->value) && $_smarty_tpl->tpl_vars['FOUND_SELECT_VALUE']->value == 0 && !($_smarty_tpl->tpl_vars['ROLE_RECORD_MODEL']->value->get('allowassignedrecordsto') == 5 && count($_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value) != 0 && $_smarty_tpl->tpl_vars['FIELD_VALUE']->value == '')) {
$_smarty_tpl->_assignInScope('OWNER_NAME', \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['FIELD_VALUE']->value));?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" data-picklistvalue="<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
" selected="selected"data-userId="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php }
} else {
if ((isset($_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value[$_smarty_tpl->tpl_vars['FIELD_VALUE']->value]))) {
$_smarty_tpl->_assignInScope('OWNER_NAME', $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value[$_smarty_tpl->tpl_vars['FIELD_VALUE']->value]);
} elseif ((isset($_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value[$_smarty_tpl->tpl_vars['FIELD_VALUE']->value]))) {
$_smarty_tpl->_assignInScope('OWNER_NAME', $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value[$_smarty_tpl->tpl_vars['FIELD_VALUE']->value]);
} else {
$_smarty_tpl->_assignInScope('OWNER_NAME', \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['FIELD_VALUE']->value));
}?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" selecteddata-picklistvalue="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value);?>
" selecteddata-userId="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value);?>
</option><?php }?></select></div><?php }?><!-- tpl-Base-Edit-Field-Owner -->
<?php }
/* smarty_template_function_OPTGRUOP_91214071163d66183e2e480_59099022 */
if (!function_exists('smarty_template_function_OPTGRUOP_91214071163d66183e2e480_59099022')) {
function smarty_template_function_OPTGRUOP_91214071163d66183e2e480_59099022(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('BLOCK_NAME'=>'','OWNERS'=>array(),'ACTIVE'=>'inactive'), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
if ($_smarty_tpl->tpl_vars['OWNERS']->value) {?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OWNERS']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"data-picklistvalue="<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value == $_smarty_tpl->tpl_vars['OWNER_ID']->value) {?> selected="selected" <?php }?>data-userId="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['SHOW_FAVORITE_OWNERS']->value) {?>data-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&action=Fields&mode=changeFavoriteOwner&fieldName=<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
&owner=<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" data-state="<?php echo $_smarty_tpl->tpl_vars['ACTIVE']->value;?>
" data-icon-active="fas fa-star" data-icon-inactive="far fa-star" data-template="<span class='c-option-template--state-icons'><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
<span class='js-select-option-actions o-filter-actions noWrap float-right'><span data-js='click|class:icons' class='mx-1 js-select-option-event<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == 'active') {?> fas fa-star<?php } else { ?> far fa-star<?php }?>'></span></span></span>"<?php }?>><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php }
}}
/*/ smarty_template_function_OPTGRUOP_91214071163d66183e2e480_59099022 */
}
