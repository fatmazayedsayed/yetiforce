<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:08:35
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\RelatedListButtons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661c349de14_96884027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84853a9df043572dd3153bcb2d44c7ac3da2227a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\RelatedListButtons.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661c349de14_96884027 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12"><div class="related px-0 ml-0"><div class=""><ul class="nav nav-pills js-tabdrop"><?php if ((isset($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWTAB']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWTAB'], 'RELATED_LINK', false, 'ITERATION');
$_smarty_tpl->tpl_vars['RELATED_LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITERATION']->value => $_smarty_tpl->tpl_vars['RELATED_LINK']->value) {
$_smarty_tpl->tpl_vars['RELATED_LINK']->do_else = false;
?><li class="c-tab--small c-tab--hover nav-item js-detail-tab baseLink mainNav<?php if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel() == $_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value || ($_smarty_tpl->tpl_vars['ITERATION']->value === 0 && $_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value === 'LBL_RECORD_PREVIEW')) {?> active<?php }?>" data-iteration="<?php echo $_smarty_tpl->tpl_vars['ITERATION']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
" data-link-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkKey');?>
" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('relationId');?>
" data-reference='<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('related');?>
' <?php if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('countRelated')) {?>data-count="<?php echo intval($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('countRelated'));?>
" <?php }?>><a href="javascript:void(0);" class="nav-link u-text-ellipsis" title="<?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable1 = ob_get_clean();
echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_prefixVariable1);?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('countRelated')) {?><span class="count badge badge-danger c-badge--md c-badge--top-right <?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('badgeClass');?>
"></span><?php }?></a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><li class="spaceRelatedList d-none"></li><?php if ((isset($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWRELATED']))) {
$_smarty_tpl->_assignInScope('SHOW_RELATED_TAB_NAME', App\Config::relation('SHOW_RELATED_MODULE_NAME'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWRELATED'], 'RELATED_LINK', false, 'ITERATION');
$_smarty_tpl->tpl_vars['RELATED_LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITERATION']->value => $_smarty_tpl->tpl_vars['RELATED_LINK']->value) {
$_smarty_tpl->tpl_vars['RELATED_LINK']->do_else = false;
$_smarty_tpl->_assignInScope('DETAILVIEWRELATEDLINKLBL', \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName()));?><li <?php if (!$_smarty_tpl->tpl_vars['SHOW_RELATED_TAB_NAME']->value) {?>data-content="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" data-placement="top" <?php }?> class="c-tab--small c-tab--hover c-tab--gray js-detail-tab nav-item baseLink d-none float-left relatedNav <?php if (!$_smarty_tpl->tpl_vars['SHOW_RELATED_TAB_NAME']->value) {?>js-popover-tooltip<?php }
if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel() == $_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value) {?> active<?php }?>" data-js="popover | tabdrop" data-iteration="<?php echo $_smarty_tpl->tpl_vars['ITERATION']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('relationId');?>
" data-reference='<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName();?>
' data-count="<?php echo App\Config::relation('SHOW_RECORDS_COUNT');?>
"><a href="javascript:void(0);" class="nav-link u-text-ellipsis" title="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
"><?php if (App\Config::relation('SHOW_RELATED_ICON')) {?><span class="iconModule yfm-<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName();
if ($_smarty_tpl->tpl_vars['SHOW_RELATED_TAB_NAME']->value) {?> mr-1<?php }?>"></span><?php }?><span class="<?php if (!$_smarty_tpl->tpl_vars['SHOW_RELATED_TAB_NAME']->value) {?>c-tab__text d-none<?php }?>"><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</span><?php if (App\Config::relation('SHOW_RECORDS_COUNT')) {?><span class="count badge badge-danger c-badge--md c-badge--top-right"></span><?php }?></a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></ul></div></div></div>
<?php }
}
