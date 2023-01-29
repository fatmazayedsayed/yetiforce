<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:06:14
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\dashboards\DashBoardPreProcessAjax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66136152b35_96951984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93e754bae68dd38ec37ae96b7d4b1cb4ab256510' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\dashboards\\DashBoardPreProcessAjax.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66136152b35_96951984 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Base-dashboards-DashBoardPreProcessAjax mt-2 mb-2"><ul class="nav nav-tabs massEditTabs selectDashboard<?php if (count($_smarty_tpl->tpl_vars['DASHBOARD_TYPES']->value) === 1) {?> d-none<?php }?> ml-sm-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DASHBOARD_TYPES']->value, 'DASHBOARD');
$_smarty_tpl->tpl_vars['DASHBOARD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DASHBOARD']->value) {
$_smarty_tpl->tpl_vars['DASHBOARD']->do_else = false;
?><li class="nav-item" data-id="<?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id'];?>
" data-js="data-id"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['CURRENT_DASHBOARD']->value == $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id']) {?> active <?php }?>"href="#" data-toggle="tab"><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['DASHBOARD']->value['name']);?>
</strong></a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php if ($_smarty_tpl->tpl_vars['MODULES_WITH_WIDGET']->value) {
$_smarty_tpl->_assignInScope('COUNT', count($_smarty_tpl->tpl_vars['MODULES_WITH_WIDGET']->value));?><ul class="nav nav-inverted-tabs massEditTabs selectDashboradView ml-sm-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULES_WITH_WIDGET']->value, 'MODULE_WIDGET');
$_smarty_tpl->tpl_vars['MODULE_WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value) {
$_smarty_tpl->tpl_vars['MODULE_WIDGET']->do_else = false;
?><li class="nav-item" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value;?>
"><a class="nav-link pt-1 pb-1 <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value) {?> active <?php }
if ($_smarty_tpl->tpl_vars['COUNT']->value === 1) {?> d-none<?php }?>"href="#" data-toggle="tab"><span class="yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value;?>
 mx-1"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_WIDGET']->value,$_smarty_tpl->tpl_vars['MODULE_WIDGET']->value);?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></div>
<?php }
}
