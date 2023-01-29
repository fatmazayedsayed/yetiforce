<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:06:13
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\UserQuickMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66135495d80_06983624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f974253e183ed0ca6fafb38f9f94abe2fd6eeeb3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\UserQuickMenu.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66135495d80_06983624 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-UserQuickMenu --><div class="dropdown-menu historyList p-0 u-max-w-sm-100 u-min-w-300pxr" aria-labelledby="showHistoryBtn" role="list" data-js="perfectscrollbar"><div class="user-info-body container-fluid m-0 pl-2 pr-2 pt-2"><div class="user-info row w-100 m-0 p-0"><div class="col-12 p-1"><div class="user-photo mr-2 float-left"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['CURRENT_USER']->value->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->getName();?>
" title="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->getName();?>
" class="c-user-avatar-medium"><?php } else { ?><span class="o-detail__icon js-detail__icon yfm-Users"></span><?php }?></div><div class="user-detail"><h6 class="mb-0 pb-0 u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->getDetail('first_name');?>
 <?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->getDetail('last_name');?>
</h6><span class="u-fs-xs text-gray"><?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleName');?>
</span></div></div></div></div><div class="user-links container-fluid d-block mt-2 p-0 u-max-w-xsm-100"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_QUICK_MENU_LINKS']->value, 'MENU_ELEMENT');
$_smarty_tpl->tpl_vars['MENU_ELEMENT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MENU_ELEMENT']->value) {
$_smarty_tpl->tpl_vars['MENU_ELEMENT']->do_else = false;
$_smarty_tpl->_assignInScope('HREF', '#');
$_smarty_tpl->_assignInScope('LINK', $_smarty_tpl->tpl_vars['MENU_ELEMENT']->value->convertToNativeLink());
$_smarty_tpl->_assignInScope('ICON', $_smarty_tpl->tpl_vars['MENU_ELEMENT']->value->getHeaderIcon());
$_smarty_tpl->_assignInScope('TITLE', $_smarty_tpl->tpl_vars['MENU_ELEMENT']->value->getLabel());
$_smarty_tpl->_assignInScope('LINK_TYPE', $_smarty_tpl->tpl_vars['MENU_ELEMENT']->value->getType());
if (!empty($_smarty_tpl->tpl_vars['LINK']->value)) {
$_smarty_tpl->_assignInScope('HREF', $_smarty_tpl->tpl_vars['LINK']->value);
}
if ($_smarty_tpl->tpl_vars['LINK_TYPE']->value === 'SEPARATOR') {?><div class="dropdown-divider <?php echo $_smarty_tpl->tpl_vars['MENU_ELEMENT']->value->getClassName();?>
"></div><?php } elseif ($_smarty_tpl->tpl_vars['LINK_TYPE']->value === 'GROUPNAME') {?><div class="user-menu-element row p-0 m-0"><div class="col-12 pt-1 pb-1 bg-light border border-light"><span class="text-uppercase font-weight-bold text-dark u-fs-sm"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value,'Users');?>
</span></div></div><?php } else { ?><div class="user-menu-element row"><div class="col-12 u-bg-light-darken"><a class="text-decoration-none u-fs-sm text-secondary pt-2 pb-2 <?php echo $_smarty_tpl->tpl_vars['MENU_ELEMENT']->value->getClassName();?>
"href="<?php echo $_smarty_tpl->tpl_vars['HREF']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['MENU_ELEMENT']->value->linkdata)) && $_smarty_tpl->tpl_vars['MENU_ELEMENT']->value->linkdata && is_array($_smarty_tpl->tpl_vars['MENU_ELEMENT']->value->linkdata)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MENU_ELEMENT']->value->linkdata, 'DATA_VALUE', false, 'DATA_NAME');
$_smarty_tpl->tpl_vars['DATA_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DATA_NAME']->value => $_smarty_tpl->tpl_vars['DATA_VALUE']->value) {
$_smarty_tpl->tpl_vars['DATA_VALUE']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['DATA_NAME']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['DATA_VALUE']->value;?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><?php if ($_smarty_tpl->tpl_vars['ICON']->value) {?><span class="<?php echo $_smarty_tpl->tpl_vars['ICON']->value;?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value,'Users');?>
"></span><span class="ml-2"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value,'Users');?>
</span><?php } else { ?><span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value,'Users');?>
</span><?php }?></a></div></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><!-- /tpl-Base-UserQuickMenu -->
<?php }
}
