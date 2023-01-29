<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:06:14
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661364ef508_46190647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ab49aabbc434335aa2a8dd8325e99db28cdb471' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Footer.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661364ef508_46190647 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Footer --></div></div></div></div></div></div></div><input class="d-none noprint" type="hidden" id="activityReminder" value="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY_REMINDER']->value;?>
" /><?php $_smarty_tpl->_assignInScope('IS_ADMIN', $_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser());
if (!empty($_smarty_tpl->tpl_vars['SHOW_FOOTER_BAR']->value)) {
$_smarty_tpl->_assignInScope('DISABLE_BRANDING', \App\YetiForce\Shop::check('YetiForceDisableBranding'));
if ($_smarty_tpl->tpl_vars['DISABLE_BRANDING']->value) {
$_smarty_tpl->_assignInScope('URL_LINKEDIN', \App\Config::component('Branding','urlLinkedIn'));
$_smarty_tpl->_assignInScope('URL_TWITTER', \App\Config::component('Branding','urlTwitter'));
$_smarty_tpl->_assignInScope('URL_FACEBOOK', \App\Config::component('Branding','urlFacebook'));
$_smarty_tpl->_assignInScope('URL_GITHUB', null);
$_smarty_tpl->_assignInScope('FOOTER_NAME', \App\Config::component('Branding','footerName'));
} else {
$_smarty_tpl->_assignInScope('URL_LINKEDIN', 'https://www.linkedin.com/groups/8177576');
$_smarty_tpl->_assignInScope('URL_TWITTER', 'https://twitter.com/YetiForceEN');
$_smarty_tpl->_assignInScope('URL_FACEBOOK', 'https://www.facebook.com/YetiForce-CRM-158646854306054/');
$_smarty_tpl->_assignInScope('URL_GITHUB', 'https://github.com/YetiForceCompany/YetiForceCRM');
$_smarty_tpl->_assignInScope('FOOTER_NAME', '');
}?><footer class="c-footer fixed-bottom js-footer<?php if (App\Config::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?> c-footer--user-info-active<?php }?> <?php if ($_smarty_tpl->tpl_vars['DISABLE_BRANDING']->value) {?> c-footer--limited <?php }?>" data-js="height"><?php if (App\Config::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?><div class="js-footer__user-info c-footer__user-info"><p><span class="mr-1"> <?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</span>(<span><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('email1');?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('phone_crm_extension'))) {?>,<span class="ml-1"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('phone_crm_extension');?>
</span><?php }?>)</p></div><?php }?><div class="container-fluid px-0 px-md-1"><ul class="float-left pagination border-0"><?php if (!empty($_smarty_tpl->tpl_vars['URL_LINKEDIN']->value)) {?><li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['URL_LINKEDIN']->value;?>
" target="_blank" rel="noreferrer noopener"><span class="fab fa-linkedin fa-2x" title="Linkedin"></span></a></li><?php }
if (!empty($_smarty_tpl->tpl_vars['URL_TWITTER']->value)) {?><li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['URL_TWITTER']->value;?>
" target="_blank" rel="noreferrer noopener"><span class="fab fa-twitter-square fa-2x" title="Twitter"></span></a></li><?php }
if (!empty($_smarty_tpl->tpl_vars['URL_FACEBOOK']->value)) {?><li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['URL_FACEBOOK']->value;?>
" target="_blank" rel="noreferrer noopener"><span class="fab fa-facebook-square fa-2x" title="Facebook"></span></a></li><?php }
if (!empty($_smarty_tpl->tpl_vars['URL_GITHUB']->value)) {?><li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['URL_GITHUB']->value;?>
" target="_blank" rel="noreferrer noopener"><span class="fab fa-github-square fa-2x" title="Github"></span></a></li><?php }?></ul><div class="float-right p-0"><ul class="pagination <?php if ($_smarty_tpl->tpl_vars['DISABLE_BRANDING']->value) {?>mt-1<?php }?>"><?php if (!\App\YetiForce\Register::verify(true)) {
if (\App\Security\AdminAccess::isPermitted('Companies')) {
ob_start();
echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_assignInScope('INFO_REGISTRATION_ERROR', "<a href='index.php?module=Companies&parent=Settings&view=List&displayModal=online'>".$_prefixVariable7."</a>");
} else {
$_smarty_tpl->_assignInScope('INFO_REGISTRATION_ERROR', \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
}?><li class="page-item"><a class="page-link text-warning p-0 mr-md-1 text-danger js-popover-tooltip c-header__btn" role="button" data-content="<?php echo \App\Language::translateArgs('LBL_YETIFORCE_REGISTRATION_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['INFO_REGISTRATION_ERROR']->value);?>
"title="<?php echo \App\Purifier::encodeHtml('<span class="yfi yfi-yeti-register-alert mr-1"></span>');
echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"<?php if (\App\Security\AdminAccess::isPermitted('Companies')) {?>href="index.php?parent=Settings&module=Companies&view=List&displayModal=online"<?php } else { ?>href="#"<?php }?>><span class="yfi yfi-yeti-register-alert fa-2x"></span></a></li><?php }
$_smarty_tpl->_assignInScope('VERIFY', \App\YetiForce\Shop::verify());
if ($_smarty_tpl->tpl_vars['VERIFY']->value) {?><li class="page-item"><a class="page-link text-warning mr-md-1 js-popover-tooltip" role="button" data-content="<?php echo $_smarty_tpl->tpl_vars['VERIFY']->value;?>
" title="<?php echo \App\Purifier::encodeHtml('<span class="yfi yfi-shop-alert mr-1"></span>');
echo \App\Language::translate('LBL_YETIFORCE_SHOP');?>
"<?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value) {?> href="index.php?module=YetiForce&parent=Settings&view=Shop" <?php } else { ?> href="#" <?php }?>><span class="yfi yfi-shop-alert <?php if (!$_smarty_tpl->tpl_vars['DISABLE_BRANDING']->value) {?>fa-2x<?php }?>"></span></a></li><?php }
if (!$_smarty_tpl->tpl_vars['DISABLE_BRANDING']->value) {
if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value) {?><li class="page-item"><a class="page-link mr-md-1" href="index.php?module=YetiForce&parent=Settings&view=Shop" target="_blank" rel="noreferrer noopener"><span class="fas fa-shopping-cart fa-2x" title="<?php echo \App\Language::translate('LBL_YETIFORCE_SHOP');?>
"></span></a></li><?php }?><li class="page-item"><a class="page-link mr-md-1" href="https://doc.yetiforce.com" target="_blank" rel="noreferrer noopener"><span class="mdi mdi-book-open-page-variant fa-2x" title="doc.yetiforce.com"></span></a></li><li class="page-item u-cursor-pointer"><a class="page-link js-show-modal" title="YetiForceCRM" role="button" data-url="index.php?module=AppComponents&view=YetiForceDetailModal" data-js="click"><span class="fas fa-info-circle fa-2x" title="YetiForceCRM"></span></a></li><?php }?></ul></div><div class="mx-auto w-75"><?php $_smarty_tpl->_assignInScope('SCRIPT_TIME', round(microtime(true)-\App\Process::$startTime,3));?><p class="text-center"><?php if (!$_smarty_tpl->tpl_vars['DISABLE_BRANDING']->value) {
$_smarty_tpl->_assignInScope('FOOTVR', (((('[').(\App\Language::translate('WEBLOADTIME'))).(': ')).($_smarty_tpl->tpl_vars['SCRIPT_TIME']->value)).('s.]'));
$_smarty_tpl->_assignInScope('FOOTOSP', 'open source project');
if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value) {
$_smarty_tpl->_assignInScope('FOOTVR', "[ver. ".((string)$_smarty_tpl->tpl_vars['YETIFORCE_VERSION']->value)."] ".((string)$_smarty_tpl->tpl_vars['FOOTVR']->value));
}
if (\App\Security\AdminAccess::isPermitted('Dependencies')) {
$_smarty_tpl->_assignInScope('FOOTOSP', '<em><a class="u-text-underline" href="index.php?module=Dependencies&view=Credits&parent=Settings">open source project</a></em>');
}?><span class="d-none d-sm-inline">Copyright &copy; YetiForce S.A. All rights reserved. <?php echo $_smarty_tpl->tpl_vars['FOOTVR']->value;?>
<br /><?php echo \App\Language::translateArgs('LBL_FOOTER_CONTENT','_Base',$_smarty_tpl->tpl_vars['FOOTOSP']->value);?>
</span><span class="d-inline d-sm-none text-center">&copy; YetiForce S.A. All rights reserved.</span><?php } else {
echo $_smarty_tpl->tpl_vars['FOOTER_NAME']->value;?>
 [<?php echo \App\Language::translate('WEBLOADTIME');?>
: <?php echo $_smarty_tpl->tpl_vars['SCRIPT_TIME']->value;?>
s.]<?php }?></p></div></div></footer><?php } else { ?><div class="js-footer" data-js="height"></div><?php }?><!-- /tpl-Base-Footer -->
<?php }
}
