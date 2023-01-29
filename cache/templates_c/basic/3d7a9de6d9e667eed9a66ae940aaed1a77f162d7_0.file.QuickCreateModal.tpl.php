<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:06:13
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\QuickCreateModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66135662622_76163565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d7a9de6d9e667eed9a66ae940aaed1a77f162d7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\QuickCreateModal.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66135662622_76163565 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Base-QuickCreateModel quickCreateModules modal" id="quickCreateModules" tabindex="-1" role="dialog" aria-labelledby="c-quick-create__title" aria-hidden="true"><div class="modal-dialog c-modal-xxl" role="document"><div class="modal-content"><div class="modal-header row no-gutters"><div class="col col-md-5 col-lg-6 col-xl-8 my-auto pb-1 pb-md-0"><h5 class="modal-tile mb-0" id="c-quick-create__title"><span class="fas fa-plus fa-xs fa-fw mr-1"></span><?php echo \App\Language::translate('LBL_QUICK_CREATE');?>
</h5></div><div class="col-md-6 col-lg-5 col-xl-3 order-last order-md-0"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input type="text" class="form-control js-quickcreate-search"></div></div><button type="button" class="close order-2 order-md-3" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><div class="u-columns-width-300px-rem u-columns-count-5"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUICKCREATE_MODULES_PARENT']->value, 'PARENT_MODULE');
$_smarty_tpl->tpl_vars['PARENT_MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PARENT_MODULE']->value) {
$_smarty_tpl->tpl_vars['PARENT_MODULE']->do_else = false;
?><div class="card u-columns__item mb-2 js-quickcreate-search-block"><h5 class="card-header pb-2 pt-2"><span class="<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value['icon'];?>
 mr-1"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PARENT_MODULE']->value['name'],'Other:Menu');?>
</h5><ul class="list-group list-group-flush"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PARENT_MODULE']->value['modules'], 'MODULEMODEL', false, 'NAME');
$_smarty_tpl->tpl_vars['MODULEMODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['MODULEMODEL']->value) {
$_smarty_tpl->tpl_vars['MODULEMODEL']->do_else = false;
$_smarty_tpl->_assignInScope('quickCreateModule', $_smarty_tpl->tpl_vars['MODULEMODEL']->value->isQuickCreateSupported());
$_smarty_tpl->_assignInScope('singularLabel', $_smarty_tpl->tpl_vars['MODULEMODEL']->value->getSingularLabelKey());
if ($_smarty_tpl->tpl_vars['singularLabel']->value == 'SINGLE_Calendar') {
$_smarty_tpl->_assignInScope('singularLabel', 'LBL_EVENT_OR_TASK');
}?><li class="list-group-item pt-1 pb-1 js-quickcreate-search-item"><a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"data-name="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['quickCreateModule']->value) {?>class="quickCreateModule text-dark"data-url="<?php echo $_smarty_tpl->tpl_vars['MODULEMODEL']->value->getQuickCreateUrl();?>
"href="javascript:void(0)"<?php } else { ?>class="text-dark"href="<?php echo $_smarty_tpl->tpl_vars['MODULEMODEL']->value->getCreateRecordUrl();?>
"<?php }?>><span class="modCT_<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
 yfm-<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
 mr-1"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['NAME']->value);?>
"></span><span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['NAME']->value);?>
</span></a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class="modal-footer"><button class="btn btn-danger btn-sm" type="reset" data-dismiss="modal"><span class="fas fa-times mr-1"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></div></div>
<?php }
}
