<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:07:31
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\EditViewBlocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661831236b8_24469444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc3778d3fa8784ec06734328a5af7f82211a8771' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\EditViewBlocks.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661831236b8_24469444 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='verticalScroll'><div class='editViewContainer'><form class="form-horizontal recordEditView" id="EditView" name="EditView" method="post" action="index.php" enctype="multipart/form-data"><?php ob_start();
echo $_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('QUALIFIED_MODULE_NAME', $_prefixVariable1);
$_smarty_tpl->_assignInScope('IS_PARENT_EXISTS', strpos($_smarty_tpl->tpl_vars['MODULE']->value,":"));
if ($_smarty_tpl->tpl_vars['PARENT_MODULE']->value != '') {?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" name="view" /><?php } else { ?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><?php }
if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)) {?><input type="hidden" name="record" id="recordId" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" name="fromView" value="Edit" /><?php $_smarty_tpl->_assignInScope('FROM_VIEW', 'Edit');
if ($_smarty_tpl->tpl_vars['RECORD_ID']->value && !empty($_smarty_tpl->tpl_vars['RECORD_ACTIVITY_NOTIFIER']->value)) {?><input type="hidden" id="recordActivityNotifier" data-interval="<?php echo App\Config::performance('recordActivityNotifierInterval',10);?>
" data-record="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><?php }
} else { ?><input type="hidden" name="fromView" value="Create" /><?php $_smarty_tpl->_assignInScope('FROM_VIEW', 'Create');
}?><input type="hidden" name="action" value="Save" /><?php if ($_smarty_tpl->tpl_vars['IS_RELATION_OPERATION']->value) {?><input type="hidden" name="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" name="sourceRecord" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
" /><input type="hidden" name="relationOperation" value="<?php echo $_smarty_tpl->tpl_vars['IS_RELATION_OPERATION']->value;?>
" /><?php }?><input type="hidden" id="preSaveValidation" value="<?php echo !empty(\App\EventHandler::getByType(\App\EventHandler::EDIT_VIEW_PRE_SAVE,$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
" /><input type="hidden" class="js-change-value-event" value="<?php echo \App\EventHandler::getVarsByType(\App\EventHandler::EDIT_VIEW_CHANGE_VALUE,$_smarty_tpl->tpl_vars['MODULE_NAME']->value,array($_smarty_tpl->tpl_vars['RECORD']->value,$_smarty_tpl->tpl_vars['FROM_VIEW']->value));?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value)) {?><input type="hidden" name="mappingRelatedField" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value);?>
' /><?php }
if (!empty($_smarty_tpl->tpl_vars['LIST_FILTER_FIELDS']->value)) {?><input type="hidden" name="listFilterFields" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['LIST_FILTER_FIELDS']->value);?>
' /><?php }?><input name="defaultOtherEventDuration" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('othereventduration'));?>
" type="hidden" /><?php if ($_smarty_tpl->tpl_vars['MODE']->value === 'duplicate') {?><input type="hidden" name="_isDuplicateRecord" value="true" /><input type="hidden" name="_duplicateRecord" value="<?php echo \App\Request::_get('record');?>
" /><?php }
if (!empty($_smarty_tpl->tpl_vars['RECORD_CONVERTER']->value)) {?><input type="hidden" name="recordConverter" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_CONVERTER']->value;?>
" /><input type="hidden" name="sourceRecord" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
" /><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD']->value->getModule()->getFieldsByDisplayType(9), 'FIELD', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditViewValue($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value),$_smarty_tpl->tpl_vars['RECORD']->value);?>
" /><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('BREADCRUMBS_ACTIVE', App\Config::layout('breadcrumbs'));
if ($_smarty_tpl->tpl_vars['BREADCRUMBS_ACTIVE']->value) {?><div class='o-breadcrumb widget_header row mb-3'><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php }?><div class="row mb-3 mx-0 <?php if (!$_smarty_tpl->tpl_vars['BREADCRUMBS_ACTIVE']->value) {?>mt-3<?php }?>"><?php if ($_smarty_tpl->tpl_vars['EDIT_VIEW_LAYOUT']->value) {
$_smarty_tpl->_assignInScope('COLUMNS_SIZES', array('col-xl-4','col-xl-8'));
} else {
$_smarty_tpl->_assignInScope('COLUMNS_SIZES', array('col-md-12'));
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COLUMNS_SIZES']->value, 'COLUMN_SIZE');
$_smarty_tpl->tpl_vars['COLUMN_SIZE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['COLUMN_SIZE']->value) {
$_smarty_tpl->tpl_vars['COLUMN_SIZE']->do_else = false;
?><div class="<?php echo $_smarty_tpl->tpl_vars['COLUMN_SIZE']->value;?>
 px-2"><?php if ($_smarty_tpl->tpl_vars['EDIT_VIEW_LAYOUT']->value && 'col-xl-8' === $_smarty_tpl->tpl_vars['COLUMN_SIZE']->value) {
if (1 === $_smarty_tpl->tpl_vars['MODULE_TYPE']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/Inventory.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->_assignInScope('RECORD_STRUCTURE', $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_RIGHT']->value);
} else {
$_smarty_tpl->_assignInScope('RECORD_STRUCTURE', $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL', 'EditViewBlockLevelLoop', array (
));
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = false;
if (count($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) <= 0) {
continue 1;
}
$_smarty_tpl->_assignInScope('BLOCK', $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value]);
$_smarty_tpl->_assignInScope('IS_HIDDEN', $_smarty_tpl->tpl_vars['BLOCK']->value->isHidden());
$_smarty_tpl->_assignInScope('IS_DYNAMIC', $_smarty_tpl->tpl_vars['BLOCK']->value->isDynamic());
$_smarty_tpl->_assignInScope('BLOCK_ICON', $_smarty_tpl->tpl_vars['BLOCK']->value->get('icon'));?><div class="js-toggle-panel c-panel c-panel--edit mb-3" data-js="click|data-dynamic" <?php if ($_smarty_tpl->tpl_vars['IS_DYNAMIC']->value) {?> data-dynamic="true" <?php }?>data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><div class="blockHeader c-panel__header align-items-center"><?php if (in_array($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['ADDRESS_BLOCK_LABELS']->value)) {
$_smarty_tpl->_assignInScope('SEARCH_ADDRESS', TRUE);
} else {
$_smarty_tpl->_assignInScope('SEARCH_ADDRESS', FALSE);
}?><span class="u-cursor-pointer js-block-toggle fas fa-angle-right m-2 <?php if (!($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)) {?>d-none<?php }?>"data-js="click" data-mode="hide"data-id=<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value]->get('id');?>
></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down m-2 <?php if (($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)) {?>d-none<?php }?>"data-js="click" data-mode="show"data-id=<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value]->get('id');?>
></span><h5><?php if (!empty($_smarty_tpl->tpl_vars['BLOCK_ICON']->value)) {?><span class="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ICON']->value;?>
 mr-2"></span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</h5></div><div class="c-panel__body c-panel__body--edit blockContent js-block-content <?php if ($_smarty_tpl->tpl_vars['IS_HIDDEN']->value) {?>d-none<?php }?>"data-js="display"><?php $_smarty_tpl->_assignInScope('PROVIDER', \App\Map\Address::getActiveProviders());
if (in_array($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['ADDRESS_BLOCK_LABELS']->value)) {?><div class="<?php if ($_smarty_tpl->tpl_vars['SEARCH_ADDRESS']->value && $_smarty_tpl->tpl_vars['PROVIDER']->value && ($_smarty_tpl->tpl_vars['WIDTHTYPE']->value == 'narrow')) {?> pb-1 <?php } else { ?> pb-2 <?php }?> pt-2 adressAction row justify-content-center"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BlockHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PROVIDER'=>$_smarty_tpl->tpl_vars['PROVIDER']->value), 0, true);
?></div><?php }?><div class="row"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'blockfields', array (
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if (($_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'time_start' || $_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'time_end') && ($_smarty_tpl->tpl_vars['MODULE']->value === 'OSSTimeControl' || $_smarty_tpl->tpl_vars['MODULE']->value === 'Reservations')) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {
if ($_smarty_tpl->tpl_vars['COUNTER']->value == '1') {?></div><div class="row"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);
}
}
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 2) {?></div><div class="row"><?php $_smarty_tpl->_assignInScope('FIELD_PARAMS', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldParams());
if (!empty($_smarty_tpl->tpl_vars['FIELD_PARAMS']->value['editWidth'])) {
$_smarty_tpl->_assignInScope('EDIT_WIDTH', $_smarty_tpl->tpl_vars['FIELD_PARAMS']->value['editWidth']);
} else {
$_smarty_tpl->_assignInScope('EDIT_WIDTH', '');
}
$_smarty_tpl->_assignInScope('COUNTER', 1);
} else {
$_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
}
if ((isset($_smarty_tpl->tpl_vars['RECORD_STRUCTURE_RIGHT']->value))) {?><div class="col-sm-12 fieldRow row form-group align-items-center my-1 js-field-block-column<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('hideField')) {?> d-none<?php }?>" data-field="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-js="container"><?php } else { ?><div class="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == "300") {?> col-md-12 m-auto<?php } elseif (!empty($_smarty_tpl->tpl_vars['EDIT_WIDTH']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['EDIT_WIDTH']->value;
} else { ?> col-sm-6 <?php }?> fieldRow row form-group align-items-center my-1 js-field-block-column <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('hideField')) {?> d-none <?php }?>" data-field="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-js="container"><?php }
$_smarty_tpl->_assignInScope('HELPINFO_LABEL', \App\Language::getTranslateHelpInfo($_smarty_tpl->tpl_vars['FIELD_MODEL']->value,$_smarty_tpl->tpl_vars['VIEW']->value));?><label class="flCT_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
 my-0 <?php if (!empty($_smarty_tpl->tpl_vars['EDIT_WIDTH']->value) && ($_smarty_tpl->tpl_vars['EDIT_WIDTH']->value == 'col-md-12')) {?> <?php echo $_smarty_tpl->tpl_vars['EDIT_WIDTH']->value;?>
 mr-auto pl-2 <?php } else { ?> col-lg-12 col-xl-3 text-lg-left text-xl-right <?php }?>  fieldLabel u-text-small-bold"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
if ($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info float-right u-cursor-pointer" title="" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value;?>
"data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName());?>
"><span class="fas fa-info-circle"></span></a><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</label><div class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
 w-100 fieldValue <?php if (!empty($_smarty_tpl->tpl_vars['EDIT_WIDTH']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['EDIT_WIDTH']->value;?>
 <?php } elseif (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() != "300") && empty($_smarty_tpl->tpl_vars['EDIT_WIDTH']->value)) {?> col-lg-12 col-xl-9 <?php }?>" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20') {?> colspan="3" <?php $_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
} elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {?> colspan="4" <?php $_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);?> <?php }?>><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == "300") {?><label class="u-text-small-bold"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><?php }
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value), 0, true);
?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php if (1 === $_smarty_tpl->tpl_vars['MODULE_TYPE']->value && !(isset($_smarty_tpl->tpl_vars['RECORD_STRUCTURE_RIGHT']->value))) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/Inventory.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
