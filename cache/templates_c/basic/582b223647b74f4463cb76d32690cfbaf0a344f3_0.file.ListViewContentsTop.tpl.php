<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:07:03
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\ListViewContentsTop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66167898666_10996804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '582b223647b74f4463cb76d32690cfbaf0a344f3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\ListViewContentsTop.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66167898666_10996804 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-ListViewContentsTop --><input type="hidden" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
" /><input type="hidden" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
" /><input type="hidden" id="previousPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists();?>
" /><input type="hidden" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists();?>
" /><input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" /><input type="hidden" id="listMaxEntriesMassEdit" value="<?php echo \App\Config::main('listMaxEntriesMassEdit');?>
" /><input type="hidden" id="autoRefreshListOnChange" value="<?php echo App\Config::performance('AUTO_REFRESH_RECORD_LIST_ON_SELECT_CHANGE');?>
" /><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
" id='pageNumber'><input type="hidden" id="selectedIds" name="selectedIds" /><input type="hidden" id="recordsCount" value="" /><input type="hidden" id="excludedIds" name="excludedIds" /><input type="hidden" id="pageLimit" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
"><input type="hidden" id="noOfEntries" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
"><input type="hidden" class="js-empty-fields" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['LOCKED_EMPTY_FIELDS']->value));?>
" data-js="value" /><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewAlphabet.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="clearfix"></div><div class="listViewEntriesDiv u-overflow-scroll-non-desktop"><input type="hidden" id="orderBy" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ORDER_BY']->value));?>
" /><input type="hidden" id="search_params" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value));?>
" /><input type="hidden" class="js-custom-view-adv-cond" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value));?>
" data-js="value" /><div class="listViewLoadingImageBlock d-none modal noprint" id="loadingListViewModal"><img class="listViewLoadingImage" src="<?php echo \App\Layout::getImagePath('loading.gif');?>
" alt="no-image" title="<?php echo \App\Language::translate('LBL_LOADING');?>
" /><p class="listViewLoadingMsg"><?php echo \App\Language::translate('LBL_LOADING_LISTVIEW_CONTENTS');?>
........</p></div><!-- /tpl-Base-ListViewContentsTop -->
<?php }
}
