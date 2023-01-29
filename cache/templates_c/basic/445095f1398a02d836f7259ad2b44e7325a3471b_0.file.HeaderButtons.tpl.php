<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:08:35
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\HeaderButtons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661c308da88_68548119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '445095f1398a02d836f7259ad2b44e7325a3471b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\HeaderButtons.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661c308da88_68548119 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Base-Detail-HeaderButtons d-flex flex-nowrap align-items-end justify-content-end my-1 o-header-toggle__detail js-btn-toolbar" data-js="container"><a class="btn btn-primary d-md-none my-auto o-header-toggle__actions-btn js-header-toggle__actions-btn" href="#" data-js="click" role="button" aria-expanded="false" aria-controls="o-view-actions__container"><span class="fas fa-ellipsis-h fa-fw" title="<?php echo \App\Language::translate('LBL_ACTION_MENU');?>
"></span></a><div class="my-auto o-header-toggle__actions js-header-toggle__actions d-md-flex float-right flex-md-row flex-wrap" id="o-view-actions__container"><?php if ((isset($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_ADDITIONAL']))) {?><div class="btn-group btn-toolbar mr-md-2 flex-md-nowrap d-block d-md-flex"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_ADDITIONAL'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'detailViewAdditional','BREAKPOINT'=>'md','CLASS'=>'c-btn-link--responsive'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
if ((isset($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_BASIC']))) {?><div class="btn-group btn-toolbar mr-md-2 flex-md-nowrap d-block d-md-flex"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_BASIC'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'detailViewBasic','BREAKPOINT'=>'md','CLASS'=>'c-btn-link--responsive'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
if ((isset($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_EXTENDED']))) {?><div class="btn-group btn-toolbar mr-md-2 flex-md-nowrap d-block d-md-flex"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_EXTENDED'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'detailViewExtended','BREAKPOINT'=>'md','CLASS'=>'c-btn-link--responsive'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></div></div>
<?php }
}
