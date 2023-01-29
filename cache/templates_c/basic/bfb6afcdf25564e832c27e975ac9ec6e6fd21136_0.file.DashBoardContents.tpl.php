<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:06:14
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\dashboards\DashBoardContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661362ed2b3_32943466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfb6afcdf25564e832c27e975ac9ec6e6fd21136' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\dashboards\\DashBoardContents.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661362ed2b3_32943466 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-DashBoardContents px-sm-1 d-flex flex-row"><div class="grid-stack"><?php $_smarty_tpl->_assignInScope('COLUMNS', 3);
$_smarty_tpl->_assignInScope('ROW', 0);
$_smarty_tpl->_assignInScope('COLCOUNT', 0);
$_smarty_tpl->_assignInScope('SPECIAL_WIDTGETS', Vtiger_DashBoard_Model::getWidgetSpecial());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'WIDGET', false, NULL, 'count', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->tpl_vars['WIDGET']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']++;
if ($_smarty_tpl->tpl_vars['WIDGET']->value->get('active') == 0) {
continue 1;
}
$_smarty_tpl->_assignInScope('WIDGETDOMID', $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid'));
if (in_array($_smarty_tpl->tpl_vars['WIDGET']->value->getName(),$_smarty_tpl->tpl_vars['SPECIAL_WIDTGETS']->value)) {
$_smarty_tpl->_assignInScope('WIDGETDOMID', ($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid')).('-').($_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid')));
}
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) > 2) {
$_smarty_tpl->_assignInScope('ROW', 4);
} elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) > 5) {
$_smarty_tpl->_assignInScope('ROW', 8);
} elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) > 8) {
$_smarty_tpl->_assignInScope('ROW', 12);
}
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) == 1 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) == 4 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) == 7) {
$_smarty_tpl->_assignInScope('COLCOUNT', 4);
} elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) == 2 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) == 5 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) == 8) {
$_smarty_tpl->_assignInScope('COLCOUNT', 8);
} elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null)%3 == 0) {
$_smarty_tpl->_assignInScope('COLCOUNT', 0);
}?><div class="grid-stack-item js-css-element-queries" gs-y="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPosition($_smarty_tpl->tpl_vars['ROW']->value,'row');?>
" gs-x="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPosition($_smarty_tpl->tpl_vars['COLCOUNT']->value,'col');?>
"gs-w="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" gs-h="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
"data-js="css-element-queries"><div id="<?php echo $_smarty_tpl->tpl_vars['WIDGETDOMID']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null)%$_smarty_tpl->tpl_vars['COLUMNS']->value == 0 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) != 0) {?> <?php }?>class="grid-stack-item-content dashboardWidget dashboardWidget_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null);?>
"data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
"data-mode="open" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
" data-cache="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('cache');?>
"data-loader="widgetLoader"></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="alert alert-info <?php if (count($_smarty_tpl->tpl_vars['WIDGETS']->value) > 0) {?> d-none <?php }?> js-dashboards-alert" role="alert" data-js=”container”><p><span class="fas fa-exclamation-circle fa-3x vertical-middle"></span>&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_EMPTY_DASHBOARD','Dashboard');?>
</p></div><input type="hidden" id="row" value="<?php echo $_smarty_tpl->tpl_vars['ROW']->value;?>
" /><input type="hidden" id="col" value="<?php echo $_smarty_tpl->tpl_vars['COLCOUNT']->value;?>
" /></div><div class="o-tablet-scroll__container mx-1 d-none" data-js="class: d-none"><div class="o-tablet-scroll__content js-tablet-scroll position-fixed u-hide-underneath border" data-js="scroll | parent"><div class="o-tablet-scroll__icons d-flex flex-column u-hide-underneath px-1"><span class="fas fa-arrow-up"></span><span class="far fa-hand-pointer my-2"></span><span class="fas fa-arrow-down"></span></div></div></div></div></div> 
<?php }
}
