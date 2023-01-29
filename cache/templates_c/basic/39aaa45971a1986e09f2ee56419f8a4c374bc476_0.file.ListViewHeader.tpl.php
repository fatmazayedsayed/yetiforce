<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:07:02
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\ListViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661662dce67_29792163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39aaa45971a1986e09f2ee56419f8a4c374bc476' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\ListViewHeader.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661662dce67_29792163 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="listViewPageDiv"><div class="listViewTopMenuDiv noprint"><div class="listViewActionsDiv row"><div class="col-12 d-inline-flex flex-wrap"><div class="c-list__buttons d-flex flex-wrap flex-sm-nowrap u-w-sm-down-100"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonViewLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('LINKS'=>$_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK'],'CLASS'=>'buttonTextHolder mr-sm-1 mb-1 mb-sm-0 c-btn-block-sm-down'), 0, true);
$_smarty_tpl->_assignInScope('LINKS', array());
if ($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS']->value) {
$_smarty_tpl->_assignInScope('LINKS', $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS']->value);
}
if ((isset($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW']))) {
$_smarty_tpl->_assignInScope('LINKS', array_merge($_smarty_tpl->tpl_vars['LINKS']->value,$_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW']));
}
if ('Tiles' == $_smarty_tpl->tpl_vars['VIEW']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('TilesSize.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonViewLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('LINKS'=>$_smarty_tpl->tpl_vars['LINKS']->value,'TEXT_HOLDER'=>'LBL_ACTIONS','BTN_ICON'=>'fa fa-list','CLASS'=>'listViewMassActions mr-sm-1 mb-1 mb-sm-0 c-btn-block-sm-down'), 0, true);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listView','CLASS'=>'mr-sm-1 mb-1 c-btn-block-sm-down'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="customFilterMainSpan ml-auto mx-xl-auto"><?php if (count($_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value) > 0) {?><select id="customFilter" class="form-control" title="<?php echo \App\Language::translate('LBL_CUSTOM_FILTER');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value, 'GROUP_CUSTOM_VIEWS', false, 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value) {
$_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->do_else = false;
?><optgroup label='<?php echo \App\Language::translate(('LBL_CV_GROUP_').(strtoupper($_smarty_tpl->tpl_vars['GROUP_LABEL']->value)));?>
'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value, 'CUSTOM_VIEW');
$_smarty_tpl->tpl_vars['CUSTOM_VIEW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value) {
$_smarty_tpl->tpl_vars['CUSTOM_VIEW']->do_else = false;
?><option data-editurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getEditUrl($_smarty_tpl->tpl_vars['MID']->value);?>
"data-deleteurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getDeleteUrl($_smarty_tpl->tpl_vars['MID']->value);?>
"data-approveurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getApproveUrl();?>
"data-denyurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getDenyUrl();?>
"data-duplicateurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getDuplicateUrl();?>
" <?php echo ' ';?>
data-editable="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isEditable();?>
"data-deletable="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->privilegeToDelete();?>
" <?php echo ' ';
if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isFeaturedEditable()) {?>data-featured="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isFeatured();?>
"<?php }?>data-pending="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isPending();?>
" <?php echo ' ';?>
data-public="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isPublic() && $_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser();?>
"<?php if ($_smarty_tpl->tpl_vars['GROUP_LABEL']->value != 'Mine' && $_smarty_tpl->tpl_vars['GROUP_LABEL']->value != 'System') {?>data-option="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getOwnerName());?>
"<?php }?>id="filterOptionId_<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('cvid');?>
" <?php echo ' ';?>
value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('cvid');?>
" <?php echo ' ';?>
data-id="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('cvid');?>
" <?php if ($_smarty_tpl->tpl_vars['VIEWID']->value != '' && $_smarty_tpl->tpl_vars['VIEWID']->value != '0' && $_smarty_tpl->tpl_vars['VIEWID']->value == $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId()) {?> selected="selected" <?php } elseif (($_smarty_tpl->tpl_vars['VIEWID']->value == '' || $_smarty_tpl->tpl_vars['VIEWID']->value == '0') && $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isDefault() == 'true') {?> selected="selected" <?php }?>class="filterOptionId_<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('cvid');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('viewname'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ((isset($_smarty_tpl->tpl_vars['FOLDERS']->value))) {?><optgroup id="foldersBlock" label='<?php echo \App\Language::translate('LBL_FOLDERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FOLDERS']->value, 'FOLDER');
$_smarty_tpl->tpl_vars['FOLDER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->value) {
$_smarty_tpl->tpl_vars['FOLDER']->do_else = false;
?><option data-foldername="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->getName();?>
" <?php if (App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['FOLDER']->value->getName()) == $_smarty_tpl->tpl_vars['FOLDER_NAME']->value) {?> selected="" <?php }?>data-folderid="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->get('folderid');?>
"data-deletable="<?php echo !($_smarty_tpl->tpl_vars['FOLDER']->value->hasDocuments());?>
"class="filterOptionId_folder<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->get('folderid');?>
 folderOption<?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->getName() == 'Default') {?> defaultFolder <?php }?>"id="filterOptionId_folder<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->get('folderid');?>
"data-id="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_CUSTOM_FILTER_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FOLDER']->value->getName(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php }?></select><?php if ((!$_smarty_tpl->tpl_vars['MID']->value || !\App\CustomView::getModuleFiltersByMenuId($_smarty_tpl->tpl_vars['MID']->value,$_smarty_tpl->tpl_vars['MODULE']->value)) && \App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE']->value,'CreateCustomFilter')) {?><div class="filterActionsDiv d-none"><hr><ul class="filterActions list-unstyled m-2"><li id="createFilter" data-value="create" data-createurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getCreateUrl();?>
"><a href="#"><span class="fas fa-plus-circle"></span> <?php echo \App\Language::translate('LBL_CREATE_NEW_FILTER');?>
</a></li></ul></div><?php }?><span class="fas fa-filter filterImage mr-2" style="display:none;"></span><?php } else { ?><input type="hidden" value="0" id="customFilter" /><?php }?></div><div class="c-list__right-container d-flex flex-nowrap u-overflow-scroll-non-desktop"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><?php if (count($_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value) > 0) {?><ul class="c-tab--border nav nav-tabs" role="list"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value, 'GROUP_CUSTOM_VIEWS', false, 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value) {
$_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value, 'CUSTOM_VIEW');
$_smarty_tpl->tpl_vars['CUSTOM_VIEW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value) {
$_smarty_tpl->tpl_vars['CUSTOM_VIEW']->do_else = false;
if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isFeatured()) {?><li class="nav-item js-filter-tab c-tab--small font-weight-bold" data-cvid="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId();?>
" role="listitem" data-js="click"><a class="nav-link<?php if ($_smarty_tpl->tpl_vars['VIEWID']->value == $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId()) {?> active<?php }?>" href="#"<?php if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('color')) {?>style="color: <?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('color');?>
; border-color: <?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('color');?>
 <?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('color');?>
 #fff" <?php }?>data-toggle="tab"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('viewname'),$_smarty_tpl->tpl_vars['MODULE']->value);
if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('description')) {?><span class="js-popover-tooltip ml-1" data-toggle="popover" data-placement="top" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('description'));?>
" data-js="popover"><span class="fas fa-info-circle"></span></span><?php }?></a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></div><div id="selectAllMsgDiv" class="alert-block msgDiv noprint"><strong><a id="selectAllMsg" href="#"><?php echo \App\Language::translate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;(<span id="totalRecordsCount"></span>)</a></strong></div><div id="deSelectAllMsgDiv" class="alert-block msgDiv noprint"><strong><a id="deSelectAllMsg" href="#"><?php echo \App\Language::translate('LBL_DESELECT_ALL_RECORDS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></strong></div><div class="listViewContentDiv" id="listViewContents">
<?php }
}
