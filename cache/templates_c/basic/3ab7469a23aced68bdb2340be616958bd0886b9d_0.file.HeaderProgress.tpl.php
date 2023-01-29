<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:08:35
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\HeaderProgress.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661c32a79d7_98714875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ab7469a23aced68bdb2340be616958bd0886b9d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\HeaderProgress.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661c32a79d7_98714875 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-HeaderProgress --><?php if ((isset($_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['progress']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['progress'], 'FIELD_MODEL', false, 'NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if (!$_smarty_tpl->tpl_vars['RECORD']->value->isEmpty($_smarty_tpl->tpl_vars['NAME']->value)) {?><div class="c-progress px-3 w-100"><ul class="c-progress__container js-header-progress-bar list-inline my-0 py-1 js-scrollbar c-scrollbar-x--small" data-picklist-name="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"data-js="container"><?php $_smarty_tpl->_assignInScope('ARROW_CLASS', "before");
$_smarty_tpl->_assignInScope('ICON_CLASS', "fas fa-check");
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getProgressHeader($_smarty_tpl->tpl_vars['RECORD']->value), 'PROGRESS_HEADER_VALUE', false, 'PROGRESS_HEADER_KEY', 'progressHeaderValue', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PROGRESS_HEADER_KEY']->value => $_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value) {
$_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_progressHeaderValue']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_progressHeaderValue']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_progressHeaderValue']->value['index'];
?><li class="c-progress__item list-inline-item mx-0 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_progressHeaderValue']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_progressHeaderValue']->value['first'] : null)) {?>first<?php }?> <?php if ($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['isActive']) {?>active<?php $_smarty_tpl->_assignInScope('ARROW_CLASS', "after");
} else {
echo $_smarty_tpl->tpl_vars['ARROW_CLASS']->value;
}
if ($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['isEditable'] && $_smarty_tpl->tpl_vars['PROGRESS_HEADER_KEY']->value !== $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['NAME']->value)) {?> u-cursor-pointer js-access<?php }?>" data-picklist-value="<?php echo $_smarty_tpl->tpl_vars['PROGRESS_HEADER_KEY']->value;?>
" data-picklist-label="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['label']);?>
" data-js="confirm|click|data"><div class="c-progress__icon__container"><span class="<?php if ($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['isLocked']) {?>fas fa-lock<?php } elseif ($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['isActive']) {?>far fa-dot-circle<?php } else {
echo $_smarty_tpl->tpl_vars['ICON_CLASS']->value;
}
if ($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['isActive']) {
$_smarty_tpl->_assignInScope('ICON_CLASS', "c-progress__icon__dot");
}
echo ' ';?>
c-progress__icon"></span></div><div class="c-progress__link"><?php if (!empty($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['description'])) {?><span class="c-progress__icon-info js-popover-tooltip" data-js="popover" data-trigger="hover focus" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['description']);?>
"><span class="fas fa-info-circle"></span></span><?php }?><span class=" js-popover-tooltip--ellipsis" data-toggle="popover" data-content="<?php echo $_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['label'];?>
" data-js="popover"><span class="c-progress__text"><?php echo $_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['label'];?>
</span></span></div></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><!-- /tpl-Base-Detail-HeaderProgress -->
<?php }
}
