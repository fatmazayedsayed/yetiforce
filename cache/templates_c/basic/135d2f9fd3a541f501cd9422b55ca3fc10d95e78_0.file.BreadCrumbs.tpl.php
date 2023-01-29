<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:06:13
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\BreadCrumbs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66135a8a796_15115083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '135d2f9fd3a541f501cd9422b55ca3fc10d95e78' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\BreadCrumbs.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66135a8a796_15115083 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-BreadCrumbs --><?php if (\App\Config::layout('breadcrumbs')) {
if ((isset($_smarty_tpl->tpl_vars['BREADCRUMB_TITLE']->value))) {
$_smarty_tpl->_assignInScope('BREADCRUMBS', Vtiger_Menu_Model::getBreadcrumbs($_smarty_tpl->tpl_vars['BREADCRUMB_TITLE']->value));
$_smarty_tpl->_assignInScope('BREADCRUMBS_POPOVER', Vtiger_Menu_Model::getBreadcrumbs());
} else {
$_smarty_tpl->_assignInScope('BREADCRUMBS', Vtiger_Menu_Model::getBreadcrumbs());
$_smarty_tpl->_assignInScope('BREADCRUMBS_POPOVER', $_smarty_tpl->tpl_vars['BREADCRUMBS']->value);
}
$_smarty_tpl->_assignInScope('HOME_ICON', 'fas fa-home');
if ($_smarty_tpl->tpl_vars['BREADCRUMBS']->value) {
$_smarty_tpl->_assignInScope('BREADCRUMBS_TEXT', "<a href='`App\Config::main('site_URL')`'><span class='".((string)$_smarty_tpl->tpl_vars['HOME_ICON']->value)."' aria-hidden='true'></span></a>");
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BREADCRUMBS_POPOVER']->value, 'item', true, 'key');
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_20_saved = $_smarty_tpl->tpl_vars['item'];
$_smarty_tpl->_assignInScope('BREADCRUMBS_ITEM', $_smarty_tpl->tpl_vars['item']->value['name']);
if ((isset($_smarty_tpl->tpl_vars['item']->value['url']))) {
$_smarty_tpl->_assignInScope('BREADCRUMBS_ITEM', "<a href='".((string)$_smarty_tpl->tpl_vars['item']->value['url'])."'>".((string)$_smarty_tpl->tpl_vars['item']->value['name'])."</a>");
}
$_smarty_tpl->_assignInScope('BREADCRUMBS_TEXT', ((string)$_smarty_tpl->tpl_vars['BREADCRUMBS_TEXT']->value)." / ".((string)$_smarty_tpl->tpl_vars['BREADCRUMBS_ITEM']->value));
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_20_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><ol class="breadcrumb breadcrumbsContainer my-0 py-auto pl-2 pr-0 js-popover-tooltip--ellipsis-icon" data-content="<?php echo \App\Purifier::encodeHTML($_smarty_tpl->tpl_vars['BREADCRUMBS_TEXT']->value);?>
" data-toggle="popover" data-js="popover | mouseenter"><li class="breadcrumb-item"><?php if (\App\Config::layout('breadcrumbsHref')) {?><a href="<?php echo App\Config::main('site_URL');?>
"><span class="<?php echo $_smarty_tpl->tpl_vars['HOME_ICON']->value;?>
" aria-hidden="true"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_HOME');?>
</span></a><?php } else { ?><span class="<?php echo $_smarty_tpl->tpl_vars['HOME_ICON']->value;?>
" aria-hidden="true"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_HOME');?>
</span><?php }?></li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BREADCRUMBS']->value, 'item', true, 'key', 'breadcrumbs', array (
));
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_21_saved = $_smarty_tpl->tpl_vars['item'];
if ((isset($_smarty_tpl->tpl_vars['item']->value['url']))) {?><li class="breadcrumb-item u-text-ellipsis"><?php if (\App\Config::layout('breadcrumbsHref')) {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php if ((isset($_smarty_tpl->tpl_vars['item']->value['icon']))) {?><span class="<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 mr-1"></span><?php }
echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><?php } else {
if ((isset($_smarty_tpl->tpl_vars['item']->value['icon']))) {?><span class="<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 mr-1"></span><?php }
echo $_smarty_tpl->tpl_vars['item']->value['name'];
}?></li><?php } elseif ($_smarty_tpl->tpl_vars['item']->last) {?><li class="breadcrumb-item active js-text-content u-text-ellipsis d-flex" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</li><li class="js-popover-icon d-none mr-1" data-js="class: d-none"><span class="fas fa-info-circle fa-sm"></span></li><?php } else { ?><li class="breadcrumb-item u-text-ellipsis"><?php if ((isset($_smarty_tpl->tpl_vars['item']->value['icon']))) {?><span class="<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 mr-1"></span><?php }
echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</li><?php }
$_smarty_tpl->_assignInScope('ITEM_PREV', $_smarty_tpl->tpl_vars['item']->value['name']);
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_21_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ol><?php if ((isset($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value)) && $_smarty_tpl->tpl_vars['SELECTED_PAGE']->value->get('description')) {
$_smarty_tpl->_assignInScope('TRANSLATED_DESCRIPTION', \App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value->get('description'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));
if (!empty(trim($_smarty_tpl->tpl_vars['TRANSLATED_DESCRIPTION']->value)) && $_smarty_tpl->tpl_vars['SELECTED_PAGE']->value->get('description') !== $_smarty_tpl->tpl_vars['TRANSLATED_DESCRIPTION']->value) {?><div class="js-popover-tooltip ml-2 d-inline my-auto u-h-fit u-cursor-pointer" data-js="popover" data-content="<?php echo $_smarty_tpl->tpl_vars['TRANSLATED_DESCRIPTION']->value;?>
"><span class="fas fa-info-circle"></span></div><?php }
}
}
}?><!-- /tpl-Base-BreadCrumbs -->
<?php }
}
