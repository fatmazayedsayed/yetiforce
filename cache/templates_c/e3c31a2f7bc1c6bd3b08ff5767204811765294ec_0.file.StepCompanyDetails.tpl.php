<?php
/* Smarty version 4.2.0, created on 2023-01-29 12:04:22
  from 'D:\xampp\htdocs\yetiforce\install\tpl\StepCompanyDetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d660c6afc0f0_15931625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3c31a2f7bc1c6bd3b08ff5767204811765294ec' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\install\\tpl\\StepCompanyDetails.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d660c6afc0f0_15931625 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-install-tpl-StepCompanyDetails container px-2 px-sm-3"><main class="main-container"><div class="inner-container"><form class="" name="step<?php echo $_smarty_tpl->tpl_vars['STEP_NUMBER']->value;?>
" method="post" action="Install.php"><input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['NEXT_STEP']->value;?>
"><input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
"><div class="row"><div class="col-12 text-center"><h2><?php echo \App\Language::translate('LBL_CONFIGURATION_COMPANY_DETAILS','Install');?>
</h2></div></div><hr><?php if (!empty($_smarty_tpl->tpl_vars['ERROR']->value)) {?><div class="alert alert-primary" role="alert"><h2><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ERROR']->value,'Install');?>
</h2></div><?php }?><div class="row"><p class="col-12"><?php echo \App\Language::translate('LBL_STEP6_DESCRIPTION','Install');?>
</p></div><?php $_smarty_tpl->_assignInScope('RECORD_MODEL', Settings_Companies_Record_Model::getCleanInstance());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getModule()->getFormFields(), 'FIELD', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
if (in_array($_smarty_tpl->tpl_vars['FIELD_NAME']->value,array("name","vat_id",'post_code','address',"city"))) {?><div class="form-group row"><label class="col-sm-4 col-form-label" for="company-<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"><?php echo App\Language::translate(mb_strtoupper(('LBL_').($_smarty_tpl->tpl_vars['FIELD_NAME']->value), 'UTF-8'),'Install');?>
<span class="no">*</span><?php if ((isset($_smarty_tpl->tpl_vars['FIELD']->value['infoText']))) {?><div class="js-popover-tooltip ml-2 mr-2 d-inline mt-2" data-js="popover" data-content="<?php echo \App\Purifier::encodeHtml(App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value['infoText'],'Install'));?>
"><span class="fas fa-info-circle"></span></div><?php }?></label><div class="col-sm-8"><input id="company-<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" name="company_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" class="form-control" data-validation-engine="validate[required]"></div></div><?php } elseif ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === "industry") {?><div class="form-group row"><label class="col-sm-4 col-form-label" for="company-industry"><?php echo App\Language::translate('LBL_INDUSTRY','Install');?>
&nbsp;<span class="no">*</span></label><div class="col-sm-8"><select class="select2 form-control" id="company-industry" name="company_industry" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Install_Utils_Model::getIndustryList(), 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php } elseif ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === "country") {?><div class="form-group row"><label class="col-sm-4 col-form-label" for="company-country"><?php echo App\Language::translate('LBL_COUNTRY','Install');?>
&nbsp;<span class="no">*</span></label><div class="col-sm-8"><select id="company-country" class="select2 form-control" name="company_country" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Install_Utils_Model::getCountryList(), 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
"><?php echo \App\Language::translateSingleMod($_smarty_tpl->tpl_vars['ITEM']->value,'Other.Country');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php } elseif ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === "companysize") {?><div class="form-group row"><label class="col-sm-4 col-form-label" for="company-website"><?php echo App\Language::translate('LBL_COMPANYSIZE','Install');?>
<span class="no">*</span></label><div class="col-sm-8"><input id="company-companysize" type="number" name="company_companysize" class="form-control" data-validation-engine="validate[required,max[16777215]]"></div></div><?php } elseif ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === "website") {?><div class="form-group row"><label class="col-sm-4 col-form-label" for="company-website"><?php echo App\Language::translate('LBL_WEBSITE','Install');
if ((isset($_smarty_tpl->tpl_vars['FIELD']->value['infoText']))) {?><div class="js-popover-tooltip ml-2 mr-2 d-inline mt-2" data-js="popover" data-content="<?php echo \App\Purifier::encodeHtml(App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value['infoText'],'Install'));?>
"><span class="fas fa-info-circle"></span></div><?php }?></label><div class="col-sm-8"><input id="company-website" type="text" name="company_website" class="form-control" data-validation-engine="validate[custom[url]]"></div></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="form-button-nav fixed-bottom button-container p-1 bg-light"><div class="text-center w-100"><a class="btn btn-lg c-btn-block-xs-down btn-danger mr-sm-1 mb-1 mb-sm-0" href="Install.php" role="button"><span class="fas fa-lg fa-arrow-circle-left mr-2"></span><?php echo App\Language::translate('LBL_BACK','Install');?>
</a><button type="submit" class="btn btn-lg c-btn-block-xs-down btn-primary js-submit" data-js="container"><?php echo App\Language::translate('LBL_NEXT','Install');?>
<span class="fas fa-lg fa-arrow-circle-right ml-2"></span></button></div></div></form></div></main></div>
<?php }
}
