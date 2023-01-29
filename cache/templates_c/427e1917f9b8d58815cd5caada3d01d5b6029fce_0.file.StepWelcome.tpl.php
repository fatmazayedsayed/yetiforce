<?php
/* Smarty version 4.2.0, created on 2023-01-29 11:55:09
  from 'D:\xampp\htdocs\yetiforce\install\tpl\StepWelcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d65e9d065ca5_94301322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '427e1917f9b8d58815cd5caada3d01d5b6029fce' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\install\\tpl\\StepWelcome.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d65e9d065ca5_94301322 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-install-tpl-StepWelcome container px-2 px-sm-3"><main class="main-container mt-3"><div class="inner-container"><form name="step<?php echo $_smarty_tpl->tpl_vars['STEP_NUMBER']->value;?>
" method="post" action="Install.php"><input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['NEXT_STEP']->value;?>
"><input type="hidden" name="session_id" value="<?php echo session_id();?>
"><div class="row"><div class="col-md-8"><h2><?php echo \App\Language::translate('LBL_SETUP_WIZARD_HEADER','Install');?>
 <?php echo $_smarty_tpl->tpl_vars['YETIFORCE_VERSION']->value;?>
</h2></div><div class="col-md-4 d-inline-flex justify-content-end"><div class="w-100"><label for="lang" class="sr-only"><?php echo \App\Language::translate('LBL_CHOOSE_LANGUAGE','Install');?>
</label><select name="lang" class="select2" id="lang" data-template-result="prependDataTemplate" data-template-selection="prependDataTemplate" title="<?php echo \App\Language::translate('LBL_CHOOSE_LANGUAGE','Install');?>
" style="width: 250px;"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'ROW', false, 'key');
$_smarty_tpl->tpl_vars['ROW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['ROW']->value) {
$_smarty_tpl->tpl_vars['ROW']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['LANG']->value == $_smarty_tpl->tpl_vars['key']->value) {?>selected<?php }?> tabindex="0" data-template="<span><span title='<?php echo $_smarty_tpl->tpl_vars['ROW']->value['displayName'];?>
' class='fi fi-<?php echo $_smarty_tpl->tpl_vars['ROW']->value['region'];?>
 mr-2'></span><?php echo $_smarty_tpl->tpl_vars['ROW']->value['displayName'];?>
</span>"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['displayName'];?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><hr><div class="row"><div class="col-md-4 text-center py-5"><img src="../<?php echo \App\Layout::getPublicUrl('layouts/resources/Logo/yetiforce_capterra.png');?>
"alt="Yetiforce Logo" class="w-100"></div><div class="col-md-8"><div class="welcome-div"><div class="float-right"><a class="helpBtn" target="_blank" rel="noreferrer noopener" href="https://yetiforce.com/en/knowledge-base/documentation/implementer-documentation"><span class="fas fa-info-circle"></span></a></div><h3><?php echo \App\Language::translate('LBL_SETUP_WIZARD_BODY','Install');?>
</h3><p><?php echo \App\Language::translate('LBL_SETUP_WIZARD_DESCRIPTION_1','Install');?>
&nbsp;<a target="_blank" rel="noreferrer noopener" href="https://github.com/YetiForceCompany/YetiForceCRM/issues" aria-label="github"><span class="fab fa-github-square fa-lg"></span></a><br /><br /><?php echo \App\Language::translate('LBL_SETUP_WIZARD_DESCRIPTION_2','Install');?>
<a target="_blank" rel="noreferrer noopener" href="https://yetiforce.com" aria-label="<?php echo \App\Language::translate('LBL_SHOP_YETIFORCE','Install');?>
"><span class="fas fa-shopping-cart ml-1"></span></a></p></div></div></div><div class="form-button-nav fixed-bottom button-container p-1 bg-light"><div class="text-center w-100"><button href="#" class="btn btn-lg c-btn-block-xs-down btn-primary bt_install mr-sm-1 <?php if ($_smarty_tpl->tpl_vars['IS_MIGRATE']->value) {?> mb-1 <?php }?> mb-sm-0"type="submit"><?php echo \App\Language::translate('LBL_INSTALL_BUTTON','Install');?>
<span class="fas fa-lg fa-arrow-circle-right ml-2"></span></button><?php if ($_smarty_tpl->tpl_vars['IS_MIGRATE']->value) {?><button style="" href="#" class="btn btn-lg c-btn-block-xs-down btn-primary bt_migrate"><?php echo \App\Language::translate('LBL_MIGRATION','Install');?>
</button><?php }?></div></div></form></div></main></div>
<?php }
}
