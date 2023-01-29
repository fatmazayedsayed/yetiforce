<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:07:32
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Field\DocumentsFileUpload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661849550e6_32895029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b04711bfe88ec359f68af20e99628abafa0b9b0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\DocumentsFileUpload.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661849550e6_32895029 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Edit-Field-DocumentsFileUpload --><?php if (!empty($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_FILE_INFORMATION']['filelocationtype'])) {
$_smarty_tpl->_assignInScope('FILE_LOCATION_TYPE_FIELD', $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_FILE_INFORMATION']['filelocationtype']);
} else {
$_smarty_tpl->_assignInScope('DOCUMENTS_MODULE_MODEL', Vtiger_Module_Model::getInstance('Documents'));
$_smarty_tpl->_assignInScope('FILE_LOCATION_TYPE_FIELD', $_smarty_tpl->tpl_vars['DOCUMENTS_MODULE_MODEL']->value->getField('filelocationtype'));
}
$_smarty_tpl->_assignInScope('IS_INTERNAL_LOCATION_TYPE', $_smarty_tpl->tpl_vars['FILE_LOCATION_TYPE_FIELD']->value->get('fieldvalue') != 'E');
$_smarty_tpl->_assignInScope('IS_EXTERNAL_LOCATION_TYPE', $_smarty_tpl->tpl_vars['FILE_LOCATION_TYPE_FIELD']->value->get('fieldvalue') == 'E');
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('RAW_FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
if ($_smarty_tpl->tpl_vars['IS_INTERNAL_LOCATION_TYPE']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['RAW_FIELD_INFO']) ? $_smarty_tpl->tpl_vars['RAW_FIELD_INFO']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['type'] = 'file';
$_smarty_tpl->_assignInScope('RAW_FIELD_INFO', $_tmp_array);
} else {
$_tmp_array = isset($_smarty_tpl->tpl_vars['RAW_FIELD_INFO']) ? $_smarty_tpl->tpl_vars['RAW_FIELD_INFO']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['type'] = 'url';
$_smarty_tpl->_assignInScope('RAW_FIELD_INFO', $_tmp_array);
}
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['RAW_FIELD_INFO']->value));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());?><div class="fileUploadContainer"><?php if ($_smarty_tpl->tpl_vars['IS_EXTERNAL_LOCATION_TYPE']->value) {?><input type="text" class="form-control<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isNameField()) {?> nameField<?php }?>"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?>required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" value="<?php if ($_smarty_tpl->tpl_vars['IS_EXTERNAL_LOCATION_TYPE']->value) {?> <?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
 <?php }?>" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?> /><?php } else { ?><input type="file" class="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isNameField()) {?>nameField<?php }?>"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?>required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" value="<?php if ($_smarty_tpl->tpl_vars['IS_INTERNAL_LOCATION_TYPE']->value) {?> <?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
 <?php }?>" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?> /><?php }?><div class="uploadedFileDetails <?php if ($_smarty_tpl->tpl_vars['IS_EXTERNAL_LOCATION_TYPE']->value) {?>d-none<?php }?>"><div class="uploadedFileSize"></div><div class="uploadedFileName"><?php if ($_smarty_tpl->tpl_vars['IS_INTERNAL_LOCATION_TYPE']->value && !empty($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)) {?>[<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
]<?php }?></div><div class="uploadFileSizeLimit redColor"><?php echo \App\Language::translate('LBL_MAX_UPLOAD_SIZE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php echo App\Config::getMaxUploadSize(true,true);
echo \App\Language::translate('MB',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div></div><!-- /tpl-Edit-Field-DocumentsFileUpload -->
<?php }
}
