<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:07:03
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\ListViewContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66167334ab1_13061059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79ef974599a8296d547b347f9da87e56f4d8d479' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\ListViewContents.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66167334ab1_13061059 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-ListViewContents --><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewContentsTop.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><table class="table tableBorderHeadBody listViewEntriesTable <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value && !$_smarty_tpl->tpl_vars['VIEW_MODEL']->value->isEmpty('entityState')) {?>listView<?php echo $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState');
}?> js-fixed-thead" data-js="floatThead"><thead><tr class="<?php if ((isset($_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value)) && count($_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value) > 0) {?>c-tab--border-active<?php }?> listViewHeaders"><th class="p-2"><div class="d-flex align-items-center"><label class="sr-only" for="listViewEntriesMainCheckBox"><?php echo \App\Language::translate('LBL_SELECT_ALL');?>
</label><input type="checkbox" id="listViewEntriesMainCheckBox" title="<?php echo \App\Language::translate('LBL_SELECT_ALL');?>
" /><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isAdvSortEnabled()) {?><button type="button" title="<?php echo \App\Language::translate('LBL_SORTING_SETTINGS');?>
" class="ml-2 btn <?php if (!empty($_smarty_tpl->tpl_vars['ORDER_BY']->value)) {?>btn-info<?php } else { ?>btn-outline-info<?php }?> btn-xs js-show-modal"data-url="index.php?view=SortOrderModal&module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"data-modalid="sortOrderModal-<?php echo \App\Layout::getUniqueId();?>
" data-js="click"><span class="fas fa-sort"></span></button><?php }
if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isCustomViewAdvCondEnabled()) {?><button type="button" class="ml-2 btn <?php if (!empty($_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value['relationId']) || (isset($_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value['relationColumns']))) {?>btn-primary<?php } else { ?>btn-outline-primary<?php }?> btn-xs js-custom-view-adv-cond-modal" title="<?php echo \App\Language::translate('LBL_CUSTOM_VIEW_ADV_COND');?>
" data-js="click"><span class="yfi-advenced-custom-view-conditions"></span></button><?php }?><div class="js-list-reload" data-js="click"></div></div></th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_11_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFullName());?><th class="noWrap p-2 u-table-column__before-block<?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('maxwidthcolumn'))) {?> u-table-column__vw-<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('maxwidthcolumn');
}
if ((isset($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]))) {?> columnSorted<?php }?>"><span class="listViewHeaderValues float-left <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isListviewSortable()) {?> js-change-order u-cursor-pointer<?php }?>"data-nextsortorderval="<?php if ((isset($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value])) && $_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value] == \App\Db::ASC) {
echo \App\Db::DESC;
} else {
echo \App\Db::ASC;
}?>"data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value;?>
"data-js="click"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFullLabelTranslation($_smarty_tpl->tpl_vars['MODULE_MODEL']->value);
if ((isset($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]))) {?>&nbsp;&nbsp;<span class="fas <?php if ($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value] == \App\Db::DESC) {?>fa-chevron-down<?php } else { ?>fa-chevron-up<?php }?>"></span><?php }?></span><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType() == 'tree' || $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType() == 'categoryMultipicklist') {
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName());?><div class="d-flex align-items-center"><input name="searchInSubcategories" value="1" type="checkbox" class="searchInSubcategories mr-1 ml-1" id="searchInSubcategories<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value;?>
" title="<?php echo \App\Language::translate('LBL_SEARCH_IN_SUBCATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getColumnName();?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]['specialOption'])) {?> checked <?php }?>><span class="js-popover-tooltip delay0" data-js="popover" data-placement="top" data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-content="<?php echo \App\Language::translate('LBL_SEARCH_IN_SUBCATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></span></div><?php }?></th><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_11_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><th class="reducePadding"></th></tr><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isQuickSearchEnabled()) {?><tr class="bg-white"><td class="listViewSearchTd"><div class="flexWrapper"><a class="btn btn-light" role="button" data-trigger="listSearch" href="javascript:void(0);"><span class="fas fa-search" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></a><a class="btn btn-light float-right listRemoveBtn" role="button" href="index.php?view=<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
&module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><span class="fas fa-times" title="<?php echo \App\Language::translate('LBL_CLEAR_SEARCH');?>
"></span></a></div></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_12_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
?><td class="pl-1"><?php $_smarty_tpl->_assignInScope('FIELD_UI_TYPE_MODEL', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getUITypeModel());
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFullName());
if ((isset($_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]))) {
$_smarty_tpl->_assignInScope('SEARCH_INFO', $_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]);
} else {
$_smarty_tpl->_assignInScope('SEARCH_INFO', array());
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL']->value->getListSearchTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value,'SEARCH_INFO'=>$_smarty_tpl->tpl_vars['SEARCH_INFO']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value), 0, true);
?></td><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_12_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><td class="reducePadding"></td></tr><?php }?></thead><tbody><?php $_smarty_tpl->_assignInScope('LISTVIEW_HEADER_COUNT', count($_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value, 'LISTVIEW_ENTRY', false, NULL, 'listview', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_listview']->value['index']++;
$_smarty_tpl->_assignInScope('LINKS', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordListViewLinksRightSide());
$_smarty_tpl->_assignInScope('RECORD_ID', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId());
$_smarty_tpl->_assignInScope('RECORD_COLORS', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getListViewColor());?><tr class="listViewEntries" data-id='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
' data-recordUrl='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
' id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_row_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_listview']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_listview']->value['index'] : null)+1;?>
"><td class="noWrap leftRecordActions listButtons <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_COLORS']->value['leftBorder']) {?>style="border-left-color: <?php echo $_smarty_tpl->tpl_vars['RECORD_COLORS']->value['leftBorder'];?>
;" <?php }?>><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewLeftSide.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true, NULL, 'listHeaderForeach', array (
));
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_14_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
?><td class="listViewEntryValue noWrap <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType();?>
"><?php if (empty($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('source_field_name')) && ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isNameField() == true || $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getUIType() == '4') && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isListViewNameFieldNavigationEnabled() == true && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->isViewable()) {?><a <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isNameField() == true) {?>class="modCT_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
 js-list-field js-popover-tooltip--record" data-js="width" <?php }?> href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value);?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value);
}?></td><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_14_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><td class="noWrap rightRecordActions listButtons <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 reducePadding"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewRightSide.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody><?php if (empty($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value) || $_smarty_tpl->tpl_vars['MODULE_NAME']->value === $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value) {?><tfoot class="listViewSummation"><tr><td></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_15_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
?><td <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last) {?>colspan="2" <?php }?> class="noWrap <?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isCalculateField())) {?>border<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isCalculateField())) {?><button class="btn btn-sm btn-light js-popover-tooltip" data-js="popover" type="button" data-operator="sum" data-field="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName();?>
" data-content="<?php echo \App\Language::translate('LBL_CALCULATE_SUM_FOR_THIS_FIELD');?>
"><span class="fas fa-signal" title="<?php echo \App\Language::translate('LBL_CALCULATE_SUM_FOR_THIS_FIELD');?>
"></span></button><span class="calculateValue"></span><?php }?></td><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_15_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></tfoot><?php }?></table><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewContentsBottom.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><!-- /tpl-Base-ListViewContents -->
<?php }
}
