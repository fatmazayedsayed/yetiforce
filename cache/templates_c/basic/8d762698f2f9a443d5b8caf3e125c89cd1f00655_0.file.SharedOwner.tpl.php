<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:07:32
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Field\SharedOwner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661841c2288_77209444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d762698f2f9a443d5b8caf3e125c89cd1f00655' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\SharedOwner.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661841c2288_77209444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'OPTGRUOP' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\yetiforce\\cache\\templates_c\\basic\\8d762698f2f9a443d5b8caf3e125c89cd1f00655_0.file.SharedOwner.tpl.php',
    'uid' => '8d762698f2f9a443d5b8caf3e125c89cd1f00655',
    'call_name' => 'smarty_template_function_OPTGRUOP_194176068163d66184176979_66446553',
  ),
));
?><!-- tpl-Base-Edit-Field-SharedOwner --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '120') {
$_smarty_tpl->_assignInScope('OWNER_FIELD', \App\Fields\Owner::getInstance($_smarty_tpl->tpl_vars['MODULE_NAME']->value));
$_smarty_tpl->_assignInScope('ALL_ACTIVEUSER_LIST', $_smarty_tpl->tpl_vars['OWNER_FIELD']->value->getAccessibleUsers('',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()));
$_smarty_tpl->_assignInScope('ALL_ACTIVEGROUP_LIST', $_smarty_tpl->tpl_vars['OWNER_FIELD']->value->getAccessibleGroups('',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()));
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('CURRENT_USER_ID', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('id'));
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));
$_smarty_tpl->_assignInScope('SHOW_FAVORITE_OWNERS', App\Config::module('Users','FAVORITE_OWNERS') && $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value === \App\User::getCurrentUserRealId());
if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value != '') {
$_smarty_tpl->_assignInScope('FIELD_VALUE', vtlib\Functions::getArrayFromValue($_smarty_tpl->tpl_vars['FIELD_VALUE']->value));
$_smarty_tpl->_assignInScope('NOT_DISPLAY_LIST', array_diff_key(array_flip($_smarty_tpl->tpl_vars['FIELD_VALUE']->value),$_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value,$_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value));
} else {
$_smarty_tpl->_assignInScope('NOT_DISPLAY_LIST', array());
$_smarty_tpl->_assignInScope('FIELD_VALUE', array());
}?><div><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="" /><select class="select2 form-control <?php if (!empty($_smarty_tpl->tpl_vars['NOT_DISPLAY_LIST']->value)) {?>hideSelected<?php }?> <?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
[]" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'multiple="multiple" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?> data-validator="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
" <?php }
if (App\Config::performance('SEARCH_OWNERS_BY_AJAX')) {?>data-ajax-search="1" data-ajax-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=Fields&mode=getOwners&fieldName=<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-minimum-input="<?php echo App\Config::performance('OWNER_MINIMUM_INPUT_LENGTH');?>
"<?php } elseif (App\Config::module('Users','FAVORITE_OWNERS')) {?>data-select-cb="registerIconsEvents" data-template-result="prependDataTemplate" data-template-selection="prependDataTemplate"<?php }?>><?php if (App\Config::performance('SEARCH_OWNERS_BY_AJAX')) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_VALUE']->value, 'USER');
$_smarty_tpl->tpl_vars['USER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['USER']->value) {
$_smarty_tpl->tpl_vars['USER']->do_else = false;
$_smarty_tpl->_assignInScope('OWNER_NAME', \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['USER']->value));?><option value="<?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
" data-picklistvalue="<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
" selected="selected"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else {
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
if (!empty($_smarty_tpl->tpl_vars['NOT_DISPLAY_LIST']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NOT_DISPLAY_LIST']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"<?php if (in_array(\App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value),$_smarty_tpl->tpl_vars['FIELD_VALUE']->value)) {?>selected="selected" <?php }?>disabled="disabled" class="d-none"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}?></select></div><?php }?><!-- /tpl-Base-Edit-Field-SharedOwner -->
<?php }
/* smarty_template_function_OPTGRUOP_194176068163d66184176979_66446553 */
if (!function_exists('smarty_template_function_OPTGRUOP_194176068163d66184176979_66446553')) {
function smarty_template_function_OPTGRUOP_194176068163d66184176979_66446553(Smarty_Internal_Template $_smarty_tpl,$params) {
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
" data-picklistvalue="<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
"<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_VALUE']->value, 'ELEMENT');
$_smarty_tpl->tpl_vars['ELEMENT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ELEMENT']->value) {
$_smarty_tpl->tpl_vars['ELEMENT']->do_else = false;
if ($_smarty_tpl->tpl_vars['ELEMENT']->value == $_smarty_tpl->tpl_vars['OWNER_ID']->value) {?> selected <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>data-userId="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['SHOW_FAVORITE_OWNERS']->value) {?>data-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&action=Fields&mode=changeFavoriteOwner&fieldName=<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
&owner=<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" data-icon-active="fas fa-star" data-icon-inactive="far fa-star"data-state="<?php echo $_smarty_tpl->tpl_vars['ACTIVE']->value;?>
" data-template="<span class='c-option-template--state-icons'><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
<span class='js-select-option-actions o-filter-actions noWrap float-right'><span data-js='click|class:icons' class='mx-1 js-select-option-event<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == 'active') {?> fas fa-star<?php } else { ?> far fa-star<?php }?>'></span></span></span>" <?php }?>><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php }
}}
/*/ smarty_template_function_OPTGRUOP_194176068163d66184176979_66446553 */
}
