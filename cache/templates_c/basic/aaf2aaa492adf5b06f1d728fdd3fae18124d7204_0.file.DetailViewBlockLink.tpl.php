<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:08:35
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\DetailViewBlockLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661c38228d9_89150496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaf2aaa492adf5b06f1d728fdd3fae18124d7204' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\DetailViewBlockLink.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661c38228d9_89150496 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="detailViewBlockLinks"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->getBlocks($_smarty_tpl->tpl_vars['TYPE_VIEW']->value), 'BLOCK_MODEL');
$_smarty_tpl->tpl_vars['BLOCK_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value) {
$_smarty_tpl->tpl_vars['BLOCK_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('RELATED_MODULE_NAME', $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->getRelatedModuleName());?><div class="js-toggle-panel c-panel detailViewBlockLink" data-js="click" data-url="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->getUrl();?>
" data-reference="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->getRelatedModuleName();?>
" data-count="<?php echo intval(App\Config::relation('SHOW_RECORDS_COUNT'));?>
"><div class="blockHeader c-panel__header"><span class="u-cursor-pointer js-block-toggle fas fa-angle-right m-2" data-js="click" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
" data-mode="hide" data-id="<?php echo $_smarty_tpl->tpl_vars['TYPE_VIEW']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down m-2 d-none" data-js="click" alt="<?php echo \App\Language::translate('LBL_COLLAPSE_BLOCK');?>
" data-mode="show" data-id="<?php echo $_smarty_tpl->tpl_vars['TYPE_VIEW']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"></span><h5><span class="moduleIcon yfm-<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);
if (App\Config::relation('SHOW_RECORDS_COUNT')) {?>&nbsp;<span class="count badge">0</span><?php }?><span class="fas fa-link js-popover-tooltip ml-2" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_RELATED_RECORDS_LIST');?>
" data-placement="left"></span></h5></div><div class="blockContent c-panel__body d-none"></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
<?php }
}
