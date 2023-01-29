<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:06:13
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\dashboards\DashBoardHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661358335d7_01180149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b6e3cdced4d3e05908c839d61ba712a906f4e70' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\dashboards\\DashBoardHeader.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661358335d7_01180149 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row"><nav class="o-breadcrumb widget_header col-12 px-3 d-xsm-flex align-items-center flex-xsm-row" aria-label="<?php echo \App\Language::translate("LBL_BREADCRUMB");?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE']->value;
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 != 'Home') {?><div class="listViewMassActions px-2"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonViewLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('LINKS'=>$_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK'],'BTN_GROUP'=>false,'CLASS'=>'buttonTextHolder'), 0, true);
?></div><?php }
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardButtons.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></nav></div>
<?php }
}
