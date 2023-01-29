<?php
/* Smarty version 4.2.0, created on 2023-01-29 11:57:59
  from 'D:\xampp\htdocs\yetiforce\install\tpl\StepLicense.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d65f47aa87c4_94924912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd634e8d4d3fb4c572a6d39af6d222f042b4c1f95' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\install\\tpl\\StepLicense.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d65f47aa87c4_94924912 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-install-tpl-StepLicense container px-2 px-sm-3"><main class="main-container"><div class="inner-container"><form name="step<?php echo $_smarty_tpl->tpl_vars['STEP_NUMBER']->value;?>
" method="post" action="Install.php"><input type="hidden" name="mode" value="stepChooseHost"><input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
"><div class="row"><div class="col-12 text-center"><h2><?php echo \App\Language::translate('LBL_LICENSE','Install');?>
</h2></div></div><hr><div class="row"><div class="col-12"><p><?php echo \App\Language::translate('LBL_STEP2_DESCRIPTION_1','Install');?>
&nbsp;<a target="_blank" rel="noreferrer noopener" href="https://yetiforce.com/en/yetiforce/license" aria-label="<?php echo \App\Language::translate('LBL_LICENSE','Install');?>
"><span class="fas fa-link"></span> </a><br /><br /><?php echo \App\Language::translate('LBL_STEP2_DESCRIPTION_2','Install');?>
</p></div></div><div class="row"><div class="col-12"><p class="license"><?php echo $_smarty_tpl->tpl_vars['LICENSE']->value;?>
</p></div></div><div class="form-button-nav fixed-bottom button-container p-1 bg-light"><div class="text-center w-100"><button type="button" class="btn btn-lg c-btn-block-sm-down btn-outline-info mb-1 mb-md-0 mr-md-1" data-toggle="modal" data-target="#license-modal"><span class="fas fa-lg fas fa-bars mr-2"></span><?php echo App\Language::translate('LBL_EXTERNAL_LIBRARIES_LICENSES','Install');?>
</button><a class="btn btn-lg c-btn-block-sm-down btn-danger mb-1 mb-md-0 mr-md-1" href="Install.php" role="button"><span class="fas fa-lg fa-times-circle mr-2"></span><?php echo App\Language::translate('LBL_DISAGREE','Install');?>
</a><button type="submit" class="btn btn-lg c-btn-block-sm-down btn-primary"><span class="fas fa-lg fa-check mr-2"></span><?php echo App\Language::translate('LBL_I_AGREE','Install');?>
</button></div></div></form></div></main><div class="modal js-license-modal" id="license-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true" data-js="shown.bs.modal | container"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="ModalLabel"><span class="fas fa-sm fas fa-bars mr-1"></span><?php echo \App\Language::translate('LBL_EXTERNAL_LIBRARIES_LICENSES','Install');?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><table class="table table-sm table-bordered js-data-table" data-js="datatable"><thead><th class="p-2"><?php echo \App\Language::translate('LBL_LIBRARY_NAME','Install');?>
</th><th class="p-2 text-center"><?php echo \App\Language::translate('LBL_VERSION','Install');?>
</th><th class="p-2 text-center"><?php echo \App\Language::translate('LBL_LICENSE','Install');?>
</th></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LIBRARIES']->value, 'ITEMS', false, 'TYPE');
$_smarty_tpl->tpl_vars['ITEMS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->value => $_smarty_tpl->tpl_vars['ITEMS']->value) {
$_smarty_tpl->tpl_vars['ITEMS']->do_else = false;
if ($_smarty_tpl->tpl_vars['ITEMS']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITEMS']->value, 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><tr><td class="u-word-break"><a title="<?php echo \App\Language::translate('LBL_LIBRARY_HOMEPAGE','Install');?>
"href="<?php if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['homepage'])) {
echo $_smarty_tpl->tpl_vars['ITEM']->value['homepage'];
} else { ?>#<?php }?>" target="_blank"rel="noreferrer noopener"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['name'];?>
</a><?php if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['description'])) {?>(<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['description'],'Settings');?>
)<?php }?></td><td class="text-center"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['version'];?>
</td><td class="text-center"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['license'];?>
</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div></div></div></div></div>
<?php }
}
