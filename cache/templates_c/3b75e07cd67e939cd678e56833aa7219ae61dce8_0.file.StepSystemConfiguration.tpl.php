<?php
/* Smarty version 4.2.0, created on 2023-01-29 11:59:30
  from 'D:\xampp\htdocs\yetiforce\install\tpl\StepSystemConfiguration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d65fa26fffd1_14007426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b75e07cd67e939cd678e56833aa7219ae61dce8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\install\\tpl\\StepSystemConfiguration.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d65fa26fffd1_14007426 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-install-tpl-StepSystemConfiguration container px-2 px-sm-3"><main class="main-container"><div class="inner-container"><form class="" name="step<?php echo $_smarty_tpl->tpl_vars['STEP_NUMBER']->value;?>
" method="post" action="Install.php"><input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['NEXT_STEP']->value;?>
"><input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
"><input type="hidden" id="not_allowed_logins" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['USERNAME_BLACKLIST']->value));?>
"><div class="row"><div class="col-12 text-center"><h2><?php echo \App\Language::translate('LBL_SYSTEM_CONFIGURATION','Install');?>
</h2></div></div><hr><div class="row"><p class="col-12"><?php echo \App\Language::translate('LBL_STEP4_DESCRIPTION','Install');?>
</p></div><div class="row d-none" id="errorMessage"></div><div class="row"><div class="col-lg-6 table-responsive"><table class="config-table input-table"><caption class="sr-only"><?php echo \App\Language::translate('LBL_DATABASE_INFORMATION','Install');?>
</caption><thead><tr><th colspan="2"><span class="fas fa-database mr-2"></span><?php echo \App\Language::translate('LBL_DATABASE_INFORMATION','Install');?>
</th></tr></thead><tbody><tr><td><label for="db-type"><?php echo \App\Language::translate('LBL_DATABASE_TYPE','Install');?>
<span class="no">*</span></label></td><td><?php echo \App\Language::translate('MySQL','Install');?>
<input id="db-type" type="hidden" value="mysql" name="db_type"></td></tr><tr><td><label for="db-hostname"><?php echo \App\Language::translate('LBL_HOST_NAME','Install');?>
<span class="no">*</span></label></td><td class="position-relative"><input id="db-hostname" type="text" class="form-control validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['DB_HOSTNAME']->value;?>
"name="db_server"></td></tr><tr><td><label for="db-port"><?php echo \App\Language::translate('LBL_HOST_PORT','Install');?>
<span class="no">*</span></label></td><td class="position-relative"><input id="db-port" type="text" class="form-control validate[required]" value="3306" name="db_port"></td></tr><tr><td><label for="db-username"><?php echo \App\Language::translate('LBL_USERNAME','Install');?>
<span class="no">*</span></label></td><td class="position-relative"><input id="db-username" type="text" class="form-control validate[required, funcCall[Install_Index_Js.checkDbUsername]]" value="<?php echo $_smarty_tpl->tpl_vars['DB_USERNAME']->value;?>
"name="db_username"></td></tr><tr><td><label for="db-password"><?php echo \App\Language::translate('LBL_PASSWORD','Install');?>
</label></td><td class="position-relative"><input id="db-password" type="password" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['DB_PASSWORD']->value;?>
"name="db_password"></td></tr><tr><td><label for="db-name"><?php echo \App\Language::translate('LBL_DB_NAME','Install');?>
<span class="no">*</span></label></td><td class="position-relative"><input id="db-name" type="text" class="form-control validate[required,funcCall[Install_Index_Js.checkDbName]]" value="<?php echo $_smarty_tpl->tpl_vars['DB_NAME']->value;?>
"name="db_name"></td></tr></tbody></table><table class="config-table input-table"><caption class="sr-only"><?php echo \App\Language::translate('LBL_MORE_INFORMATION','Install');?>
</caption><thead><tr><th colspan="2"><span class="fas fa-tools mr-2"></span><?php echo \App\Language::translate('LBL_MORE_INFORMATION','Install');?>
</th></tr></thead><tbody><tr><td><label for="currency-name"><?php echo \App\Language::translate('LBL_CURRENCIES','Install');?>
<span class="no">*</span></label></td><td><select id="currency-name" name="currency_name" class="select2 " style="width:220px;"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURRENCIES']->value, 'CURRENCY_INFO', false, 'CURRENCY_NAME');
$_smarty_tpl->tpl_vars['CURRENCY_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CURRENCY_NAME']->value => $_smarty_tpl->tpl_vars['CURRENCY_INFO']->value) {
$_smarty_tpl->tpl_vars['CURRENCY_INFO']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['CURRENCY_NAME']->value == 'Euro') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['CURRENCY_NAME']->value;?>
(<?php echo $_smarty_tpl->tpl_vars['CURRENCY_INFO']->value[1];?>
)</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td></tr></tbody></table></div><div class="col-lg-6"><div class="table-responsive"><table class="config-table input-table"><caption class="sr-only"><?php echo \App\Language::translate('LBL_ADMIN_INFORMATION','Install');?>
</caption><thead><tr><th colspan="2"><span class="fas fa-user-tie mr-2"></span><?php echo \App\Language::translate('LBL_ADMIN_INFORMATION','Install');?>
</th></tr></thead><tbody><tr><td><label for="user-name"><?php echo \App\Language::translate('LBL_USERNAME','Install');?>
</label></td><td class="position-relative"><input id="user-name" type="text" class="form-control validate[required,funcCall[Install_Index_Js.checkUsername]]" value="<?php echo $_smarty_tpl->tpl_vars['ADMIN_NAME']->value;?>
" name="user_name"></td></tr><tr><td><label for="password"><?php echo \App\Language::translate('LBL_PASSWORD','Install');?>
<span class="no">*</span></label></td><td class="position-relative"><input type="password" class="form-control validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PASSWORD']->value;?>
" name="password" id="password"></td></tr><tr><td><label for="retype-password"><?php echo \App\Language::translate('LBL_RETYPE_PASSWORD','Install');?>
<span class="no">*</span></label></td><td class="position-relative"><input type="password" class="form-control validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PASSWORD']->value;?>
" name="retype_password" id="retype-password"><span id="passwordError" class="no"></span></td></tr><tr><td><label for="first-name"><?php echo \App\Language::translate('LBL_FIRST_NAME','Install');?>
</label></td><td><input id="first-name" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ADMIN_FIRSTNAME']->value;?>
"name="firstname"></td></tr><tr><td><label for="last-name"><?php echo \App\Language::translate('LBL_LAST_NAME','Install');?>
<span class="no">*</span></label></td><td class="position-relative"><input id="last-name" type="text" class="form-control validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['ADMIN_LASTNAME']->value;?>
"name="lastname"></td></tr><tr><td><label for="admin-email"><?php echo \App\Language::translate('LBL_EMAIL','Install');?>
<span class="no">*</span></label></td><td class="position-relative"><input id="admin-email" type="text" class="form-control validate[required,custom[email]]" value="<?php echo $_smarty_tpl->tpl_vars['ADMIN_EMAIL']->value;?>
" name="admin_email"></td></tr><tr><td><label for="date-format"><?php echo \App\Language::translate('LBL_DATE_FORMAT','Install');?>
<span class="no">*</span></label></td><td><select class="select2 form-control" id="date-format" style="width:220px;" name="dateformat"><option>yyyy-mm-dd</option><option>dd-mm-yyyy</option><option>mm-dd-yyyy</option><option>yyyy.mm.dd</option><option>dd.mm.yyyy</option><option>mm.dd.yyyy</option><option>yyyy/mm/dd</option><option>dd/mm/yyyy</option><option>mm/dd/yyyy</option></select></td></tr><tr><td><label for="time-zone"><?php echo \App\Language::translate('LBL_TIME_ZONE','Install');?>
<span class="no">*</span></label></td><td><select class="select2 form-control" id="time-zone" name="default_timezone"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TIMEZONES']->value, 'TIMEZONE');
$_smarty_tpl->tpl_vars['TIMEZONE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TIMEZONE']->value) {
$_smarty_tpl->tpl_vars['TIMEZONE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TIMEZONE']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['TIMEZONE']->value == 'Europe/London') {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TIMEZONE']->value,'Users');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td></tr></tbody></table></div><div class="form-button-nav fixed-bottom button-container p-1 bg-light"><div class="text-center w-100"><a class="btn btn-lg c-btn-block-xs-down btn-danger mr-sm-1 mb-1 mb-sm-0" href="Install.php" role="button"><span class="fas fa-lg fa-arrow-circle-left mr-2"></span><?php echo App\Language::translate('LBL_BACK','Install');?>
</a><button type="submit" class="btn btn-lg c-btn-block-xs-down btn-primary"><?php echo App\Language::translate('LBL_NEXT','Install');?>
<span class="fas fa-lg fa-arrow-circle-right ml-2"></span></button></div></div></div></div></form></div></main></div>
<?php }
}
