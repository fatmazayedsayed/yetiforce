<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:08:34
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\DetailViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661c2bda2a9_99491905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ba0c2e16049c8f7e1f11c3b51255bc93b659318' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\DetailViewHeader.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661c2bda2a9_99491905 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-DetailViewHeader --><?php $_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));
$_smarty_tpl->_assignInScope('BREADCRUMBS_ACTIVE', App\Config::layout('breadcrumbs'));?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" /><div class="detailViewContainer"><div class="row detailViewTitle <?php if ($_smarty_tpl->tpl_vars['BREADCRUMBS_ACTIVE']->value) {?>p-md-0 pt-1<?php } else { ?>pt-3<?php }?>"><?php if ($_smarty_tpl->tpl_vars['SHOW_BREAD_CRUMBS']->value && $_smarty_tpl->tpl_vars['BREADCRUMBS_ACTIVE']->value) {?><div class="o-breadcrumb widget_header mb-2 d-flex justify-content-between px-3 px-sm-2 w-100"><div class="o-breadcrumb__container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php }
if (!empty($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_HEADER_WIDGET'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_HEADER_WIDGET'], 'WIDGET');
$_smarty_tpl->tpl_vars['WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->tpl_vars['WIDGET']->do_else = false;
?><div class="col-md-12 px-0"><?php echo Vtiger_Widget_Model::processWidget($_smarty_tpl->tpl_vars['WIDGET']->value,$_smarty_tpl->tpl_vars['RECORD']->value);?>
</div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewHeaderTitle.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="detailViewInfo row"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('RelatedListButtons.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="col-md-12 pt-1 <?php if (!empty($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWTAB']) || !empty($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWRELATED'])) {?> details <?php }?>"><form id="detailView" data-name-fields="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields()));?>
" method="POST"><input type="hidden" id="preSaveValidation" value="<?php echo !empty(\App\EventHandler::getByType(\App\EventHandler::EDIT_VIEW_PRE_SAVE,$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
" /><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->getId() && !empty($_smarty_tpl->tpl_vars['RECORD_ACTIVITY_NOTIFIER']->value)) {?><input type="hidden" id="recordActivityNotifier" data-interval="<?php echo App\Config::performance('recordActivityNotifierInterval',10);?>
" data-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><?php }?><div class="contents"><!-- /tpl-Base-DetailViewHeader -->
<?php }
}
