<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:08:34
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\DetailViewHeaderTitle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661c2cffe50_89261410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ed7dfcfa009639b7883fca9ea65f1ef43cb84f3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\DetailViewHeaderTitle.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661c2cffe50_89261410 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-DetailViewHeaderTitle --><div class="d-flex flex-wrap flex-md-nowrap px-md-3 px-1 w-100"><div class="u-min-w-md-70 w-100"><?php $_smarty_tpl->_assignInScope('COUNT_IN_HIERARCHY', App\Config::module($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'COUNT_IN_HIERARCHY'));?><div class="moduleIcon"><span class="o-detail__icon js-detail__icon yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
if ($_smarty_tpl->tpl_vars['COUNT_IN_HIERARCHY']->value) {?> u-cursor-pointer js-detail-hierarchy position-relative<?php }?>"></span><?php if ($_smarty_tpl->tpl_vars['COUNT_IN_HIERARCHY']->value) {?><span class="hierarchy"><span class="badge <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('active')) {?> bgGreen <?php } else { ?> bgOrange <?php }?>"></span></span><?php }?></div><div class="pl-1"><div class="d-flex flex-nowrap align-items-center js-popover-tooltip--ellipsis-icon" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getName());?>
" data-toggle="popover" data-js="popover | mouseenter"><h4 class="recordLabel h6 mb-0 js-popover-text" data-js="clone"><span class="modCT_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo \App\Utils\Completions::decode(Vtiger_Util_Helper::toVtiger6SafeHTML(\App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getName())));?>
</span></h4><span class="fas fa-info-circle fa-sm js-popover-icon d-none" data-js="class: d-none"></span><?php $_smarty_tpl->_assignInScope('RECORD_STATE', \App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()));
if ($_smarty_tpl->tpl_vars['RECORD_STATE']->value && $_smarty_tpl->tpl_vars['RECORD_STATE']->value !== 'Active') {
$_smarty_tpl->_assignInScope('COLOR', App\Config::search('LIST_ENTITY_STATE_COLOR'));?><span class="badge badge-secondary ml-1" <?php if ($_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value]) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value];?>
;" <?php }?>><?php if (\App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()) === 'Trash') {?><span class="fas fa-trash-alt mr-2"></span><?php echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');
} else { ?><span class="fas fa-archive mr-2"></span><?php echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');
}?></span><?php }?></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/HeaderValues.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="ml-md-2 pr-md-2 u-min-w-md-30 w-100"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/HeaderButtons.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/HeaderHighlights.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/HeaderProgress.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><!-- /tpl-Base-DetailViewHeaderTitle -->
<?php }
}
