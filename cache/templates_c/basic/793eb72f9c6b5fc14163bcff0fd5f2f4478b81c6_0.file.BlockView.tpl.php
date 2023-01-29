<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:08:35
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\BlockView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661c3a2c8e6_01366938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '793eb72f9c6b5fc14163bcff0fd5f2f4478b81c6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\BlockView.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661c3a2c8e6_01366938 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-BlockView --><div class="detailViewTable"><div class="js-toggle-panel c-panel" data-js="click|data-dynamic" <?php if ((isset($_smarty_tpl->tpl_vars['IS_DYNAMIC']->value)) && $_smarty_tpl->tpl_vars['IS_DYNAMIC']->value) {?> data-dynamic="true" <?php }?> data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value;?>
"><div class="blockHeader c-panel__header"><?php if ((isset($_smarty_tpl->tpl_vars['BLOCK']->value))) {?><div class="m-2"><span class="u-cursor-pointer js-block-toggle fas fa-angle-right <?php if (!($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)) {?>d-none<?php }?>" data-js="click" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
" data-mode="hide" data-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value]->get('id');?>
"></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down <?php if ($_smarty_tpl->tpl_vars['IS_HIDDEN']->value) {?>d-none<?php }?>" data-js="click" alt="<?php echo \App\Language::translate('LBL_COLLAPSE_BLOCK');?>
" data-mode="show" data-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value]->get('id');?>
"></span></div><?php }?><h5><?php if (!empty($_smarty_tpl->tpl_vars['BLOCK_ICON']->value)) {?><span class="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ICON']->value;?>
 mr-2"></span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="c-panel__body blockContent <?php if ($_smarty_tpl->tpl_vars['IS_HIDDEN']->value) {?>d-none<?php }?>"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);?><div class="form-row border-bottom u-border-bottom-0-sm"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('FIELD_PARAMS', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldParams());
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isViewableInDetailView()) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == "20" || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {
if ($_smarty_tpl->tpl_vars['COUNTER']->value == '1') {
$_smarty_tpl->_assignInScope('COUNTER', 0);
}
}
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 2) {?></div><div class="form-row border-bottom u-border-bottom-0-sm"><?php $_smarty_tpl->_assignInScope('COUNTER', 1);
} else {
$_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
}
if (!empty($_smarty_tpl->tpl_vars['FIELD_PARAMS']->value['detailsWidth'])) {
$_smarty_tpl->_assignInScope('DETAILS_WIDTH', $_smarty_tpl->tpl_vars['FIELD_PARAMS']->value['detailsWidth']);
} else {
$_smarty_tpl->_assignInScope('DETAILS_WIDTH', '');
}?><div class="col-sm"><div class="form-row border-right align-items-start js-field-block-column<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('hideField')) {?> d-none<?php }?>" data-field="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-js="container"><div class="fieldLabel u-border-bottom-label-md u-border-right-0-md c-panel__label <?php if (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') && empty($_smarty_tpl->tpl_vars['DETAILS_WIDTH']->value)) {?>  col-lg-3 <?php } elseif (!empty($_smarty_tpl->tpl_vars['DETAILS_WIDTH']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['DETAILS_WIDTH']->value;?>
 <?php } else { ?> col-lg-6 <?php }?> <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-right" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_fieldLabel_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"><?php $_smarty_tpl->_assignInScope('HELPINFO_LABEL', \App\Language::getTranslateHelpInfo($_smarty_tpl->tpl_vars['FIELD_MODEL']->value,$_smarty_tpl->tpl_vars['VIEW']->value));?><label class="flCT_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
 u-text-small-bold <?php if (!empty($_smarty_tpl->tpl_vars['DETAILS_WIDTH']->value) && ($_smarty_tpl->tpl_vars['DETAILS_WIDTH']->value == 'col-md-12')) {?> mr-auto pl-2 <?php }?>"><?php $_smarty_tpl->_assignInScope('ICON', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getIcon('Detail'));
if ((isset($_smarty_tpl->tpl_vars['ICON']->value['name']))) {?><span class="<?php echo $_smarty_tpl->tpl_vars['ICON']->value['name'];?>
 mr-1"></span><?php }
ob_start();
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel();
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable3 = ob_get_clean();
echo \App\Language::translate($_prefixVariable2,$_prefixVariable3);
if ($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info float-right u-cursor-pointer" title="" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value;?>
"data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></a><?php }?></label></div><div class="fieldValue u-border-bottom-value-sm d-flex align-items-center justify-content-between <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 <?php if (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') && empty($_smarty_tpl->tpl_vars['DETAILS_WIDTH']->value)) {?> col-lg-9 <?php } elseif (!empty($_smarty_tpl->tpl_vars['DETAILS_WIDTH']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['DETAILS_WIDTH']->value;?>
 <?php } else { ?> col-lg-6 <?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_fieldValue_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {?> <?php $_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);?> <?php }?>><span class="value flex-grow-1" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '21' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {?> style="white-space:normal;" <?php }?>><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getDetailViewTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value,'SOURCE_TPL'=>'BlockView'), 0, true);
?></span><?php $_smarty_tpl->_assignInScope('EDIT', false);
if (in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName(),array('date_start','due_date')) && $_smarty_tpl->tpl_vars['MODULE_NAME']->value == 'Calendar') {
$_smarty_tpl->_assignInScope('EDIT', true);
}
if ($_smarty_tpl->tpl_vars['IS_AJAX_ENABLED']->value && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable() == 'true' && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isAjaxEditable() == 'true' && !$_smarty_tpl->tpl_vars['EDIT']->value) {?><button type="button" class="btn btn-sm btn-light js-detail-quick-edit u-cursor-pointer"><span class="yfi yfi-full-editing-view" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button><span class="d-none edit col-12 px-0"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'boolean' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'picklist') {?><input type="hidden" class="fieldname" data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
' data-prev-value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
' /><?php } else {
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
if (is_array($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)) {
$_smarty_tpl->_assignInScope('FIELD_VALUE', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_VALUE']->value));
}?><input type="hidden" class="fieldname" value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
' data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" data-prev-value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
' /><?php }?></span><?php }?></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 1) {?><div class="col-md-6 fieldsLabelValue"></div><?php }?></div></div></div></div><!-- /tpl-Base-Detail-BlockView -->
<?php }
}
