<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:07:02
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66166dd7f80_21214556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c7112d9424d4c299945a6aa696670e98a5c22cc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Pagination.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66166dd7f80_21214556 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['VIEWNAME']->value)) {
$_smarty_tpl->_assignInScope('VIEWNAME', 'list');
}
if (empty($_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value)) {
$_smarty_tpl->_assignInScope('LISTVIEW_COUNT', 0);
}?><nav class="tpl-Pagination" role="navigation" aria-label="<?php echo \App\Language::translate('LBL_PAGINATION_NAV');?>
"><ul class="js-pagination-list pagination m-0"<?php if ((isset($_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value))) {?>data-total-count="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" <?php }?> data-js="data"><li class="js-page--set page-item <?php if (!$_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists() || $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value == 1) {?> disabled <?php }?> pageNumber firstPage" aria-label="<?php echo \App\Language::translate('LBL_GO_TO_FIRST_PAGE');?>
"data-id="1" data-js="data"><a class="page-link" href="#"><span class="fas fa-fast-backward mr-1 d-inline-block d-sm-none"></span><span class="d-none d-sm-inline"><?php echo \App\Language::translate('LBL_FIRST');?>
</span></a></li><li class="page-item <?php if (!$_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists() || $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value == 1) {?>disabled<?php }?>"><a class="js-page--previous page-link" aria-label="<?php echo \App\Language::translate('LBL_PREV');?>
"id="<?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
ViewPreviousPageButton" data-js="click" href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li><?php if ($_smarty_tpl->tpl_vars['PAGE_COUNT']->value != 0) {
$_smarty_tpl->_assignInScope('PAGIN_TO', $_smarty_tpl->tpl_vars['START_PAGIN_FROM']->value+4);
$_smarty_tpl->tpl_vars['PAGE_INDEX'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['PAGE_INDEX']->step = 1;$_smarty_tpl->tpl_vars['PAGE_INDEX']->total = (int) ceil(($_smarty_tpl->tpl_vars['PAGE_INDEX']->step > 0 ? $_smarty_tpl->tpl_vars['PAGIN_TO']->value+1 - ($_smarty_tpl->tpl_vars['START_PAGIN_FROM']->value) : $_smarty_tpl->tpl_vars['START_PAGIN_FROM']->value-($_smarty_tpl->tpl_vars['PAGIN_TO']->value)+1)/abs($_smarty_tpl->tpl_vars['PAGE_INDEX']->step));
if ($_smarty_tpl->tpl_vars['PAGE_INDEX']->total > 0) {
for ($_smarty_tpl->tpl_vars['PAGE_INDEX']->value = $_smarty_tpl->tpl_vars['START_PAGIN_FROM']->value, $_smarty_tpl->tpl_vars['PAGE_INDEX']->iteration = 1;$_smarty_tpl->tpl_vars['PAGE_INDEX']->iteration <= $_smarty_tpl->tpl_vars['PAGE_INDEX']->total;$_smarty_tpl->tpl_vars['PAGE_INDEX']->value += $_smarty_tpl->tpl_vars['PAGE_INDEX']->step, $_smarty_tpl->tpl_vars['PAGE_INDEX']->iteration++) {
$_smarty_tpl->tpl_vars['PAGE_INDEX']->first = $_smarty_tpl->tpl_vars['PAGE_INDEX']->iteration === 1;$_smarty_tpl->tpl_vars['PAGE_INDEX']->last = $_smarty_tpl->tpl_vars['PAGE_INDEX']->iteration === $_smarty_tpl->tpl_vars['PAGE_INDEX']->total;
if ($_smarty_tpl->tpl_vars['PAGE_INDEX']->value == $_smarty_tpl->tpl_vars['PAGE_COUNT']->value || $_smarty_tpl->tpl_vars['PAGE_INDEX']->value == $_smarty_tpl->tpl_vars['PAGIN_TO']->value) {
if ($_smarty_tpl->tpl_vars['PAGE_COUNT']->value > 5) {?><li class="page-item <?php if ($_smarty_tpl->tpl_vars['PAGE_COUNT']->value == 1) {?> disabled<?php }?>"><a class="page-link" id="dLabel" data-target="#" data-toggle="dropdown" role="button" href="#" aria-expanded="true">...</a><div class="js-page--jump-drop-down dropdown-menu listViewBasicAction" data-js="click" aria-labelledby="dLabel" id="<?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
ViewPageJumpDropDown"><a class="dropdown-item"><div class="row"><div class="col-md-3 p-0 textAlignCenter pushUpandDown2per"><span><?php echo \App\Language::translate('LBL_PAGE');?>
</span></div><div class="col-md-3 p-0"><input type="text" id="pageToJump" class="js-page-jump listViewPagingInput u-h-input-text textAlignCenter form-control" title="<?php echo \App\Language::translate('LBL_LISTVIEW_PAGE_JUMP');?>
"value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
"data-js="keypress" /></div><div class="col-md-2 p-0 textAlignCenter pushUpandDown2per"><?php echo \App\Language::translate('LBL_OF');?>
</div><div class="js-page--total col-md-2 p-0 pushUpandDown2per textAlignCenter" id="totalPageCount" data-js="text"><?php echo $_smarty_tpl->tpl_vars['PAGE_COUNT']->value;?>
</div></div></a></div></li><?php }
break 1;
}?><li class="js-page--set page-item pageNumber<?php if ($_smarty_tpl->tpl_vars['PAGE_NUMBER']->value == $_smarty_tpl->tpl_vars['PAGE_INDEX']->value) {?> active disabled<?php }?>"data-id="<?php echo $_smarty_tpl->tpl_vars['PAGE_INDEX']->value;?>
" data-js="click"><a class="page-link" <?php if ($_smarty_tpl->tpl_vars['PAGE_INDEX']->value === ($_smarty_tpl->tpl_vars['PAGE_COUNT']->value-1)) {?>aria-label="<?php echo \App\Language::translate('LBL_PREV_PAGE');?>
 <?php echo $_smarty_tpl->tpl_vars['PAGE_INDEX']->value;?>
" <?php } else { ?>aria-label="<?php echo \App\Language::translate('LBL_GO_TO_PAGE_NUMBER');?>
 <?php echo $_smarty_tpl->tpl_vars['PAGE_INDEX']->value;?>
" <?php }?> href="#"><?php echo $_smarty_tpl->tpl_vars['PAGE_INDEX']->value;?>
</a></li><?php }
}
}
if ($_smarty_tpl->tpl_vars['PAGE_INDEX']->value <= $_smarty_tpl->tpl_vars['PAGE_COUNT']->value) {?><li class="js-page--set pageNumber<?php if ($_smarty_tpl->tpl_vars['PAGE_NUMBER']->value == $_smarty_tpl->tpl_vars['PAGE_COUNT']->value) {?> active disabled<?php }?>" data-js="click"data-id="<?php echo $_smarty_tpl->tpl_vars['PAGE_COUNT']->value;?>
"><a class="page-link" aria-current="true" aria-label="<?php echo \App\Language::translate('LBL_CURRENT_PAGE');?>
 <?php echo $_smarty_tpl->tpl_vars['PAGE_COUNT']->value;?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['PAGE_COUNT']->value;?>
</a></li><?php }?><li class="js-next-page page-item <?php if ((!$_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists())) {?>disabled<?php }?>"id="<?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
ViewNextPageButton" data-js="click"><a class="page-link" href="#" aria-label="<?php echo \App\Language::translate('LBL_NEXT');?>
"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li><?php if (empty($_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value) && $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists()) {?><li class="js-count-number-records page-item js-popover-tooltip" data-js="popover|click"<?php ob_start();
echo \App\Language::translate('LBL_WIDGET_FILTER_TOTAL_COUNT_INFO');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('TRANSLATE_DATA', $_prefixVariable1);?>id="totalCountBtn" data-content="<?php echo $_smarty_tpl->tpl_vars['TRANSLATE_DATA']->value;?>
"><a class="page-link" aria-label="<?php echo $_smarty_tpl->tpl_vars['TRANSLATE_DATA']->value;?>
" href="#"><span class="fas fa-signal"></span></a></li><?php }
if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value)) {?><li class="js-page--set page-item <?php if ($_smarty_tpl->tpl_vars['PAGE_NUMBER']->value == $_smarty_tpl->tpl_vars['PAGE_COUNT']->value || (!$_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists())) {?> disabled <?php }?> pageNumber lastPage"data-id="<?php echo $_smarty_tpl->tpl_vars['PAGE_COUNT']->value;?>
" data-js="click"><a class="page-link" href="#"><span class="fas fa-fast-forward mr-1 d-inline-block d-sm-none"></span><span class="d-none d-sm-inline"><?php echo \App\Language::translate('LBL_LAST');?>
</span></a></li><?php }?><li class="page-item text-muted"><a class="page-link pageNumbersText"><span class="js-popover-tooltip d-block d-sm-none" tabindex="0" data-trigger="focus" data-js="popover" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
 <?php echo \App\Language::translate('LBL_TO_LC');?>
 <?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();
if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
)<?php }?>"><span class="fas fa-info-circle" title="<?php echo App\Language::translate('LBL_SHOW_INVENTORY_ROW');?>
"></span></span><span class="d-none d-sm-inline"><?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
 <?php echo \App\Language::translate('LBL_TO_LC');?>
 <?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
 <?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
)<?php }?></span></a></li></ul></nav>
<?php }
}
