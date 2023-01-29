<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:06:14
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\PageFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66136420826_83792679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8e36b94667fe43bc903b286a25c52f7b6f7a2a9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\PageFooter.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66136420826_83792679 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-PageFooter --></div><input type="hidden" id="processEvents" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(App\Process::getEvents()));?>
" /><?php if ($_smarty_tpl->tpl_vars['SHOW_FOOTER']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if (\App\Debuger::isDebugBar()) {
echo \App\Debuger::getDebugBar()->getJavascriptRenderer()->render();
}?></body></html><!-- /tpl-Base-PageFooter -->
<?php }
}
