<?php
/* Smarty version 4.2.0, created on 2023-01-29 12:01:36
  from 'D:\xampp\htdocs\yetiforce\install\tpl\StepConfirmConfigurationSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d660206652d6_32018980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53007d07841afe5818dc38ab5215f5142a55d703' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\install\\tpl\\StepConfirmConfigurationSettings.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d660206652d6_32018980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'SHOW_HELP_TEXT' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\yetiforce\\cache\\templates_c\\53007d07841afe5818dc38ab5215f5142a55d703_0.file.StepConfirmConfigurationSettings.tpl.php',
    'uid' => '53007d07841afe5818dc38ab5215f5142a55d703',
    'call_name' => 'smarty_template_function_SHOW_HELP_TEXT_134792035363d660205c7e00_94476271',
  ),
  'HIGHLIGHT_ROW' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\yetiforce\\cache\\templates_c\\53007d07841afe5818dc38ab5215f5142a55d703_0.file.StepConfirmConfigurationSettings.tpl.php',
    'uid' => '53007d07841afe5818dc38ab5215f5142a55d703',
    'call_name' => 'smarty_template_function_HIGHLIGHT_ROW_134792035363d660205c7e00_94476271',
  ),
));
?><div class="tpl-install-tpl-StepConfirmConfigurationSettings container px-2 px-sm-3"><main class="main-container"><div class="inner-container"><form class="" name="step<?php echo $_smarty_tpl->tpl_vars['STEP_NUMBER']->value;?>
" method="post" action="Install.php"><input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['NEXT_STEP']->value;?>
"><input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
"><div class="row"><div class="col-12 text-center"><h2><?php echo \App\Language::translate('LBL_CONFIRM_CONFIGURATION_SETTINGS','Install');?>
</h2></div></div><hr><div class="row"><p class="col-12"><?php echo \App\Language::translate('LBL_STEP5_DESCRIPTION','Install');?>
</p></div><?php if ($_smarty_tpl->tpl_vars['DB_CONNECTION_INFO']->value['flag'] != true) {?><div class="offset2 row" id="errorMessage"><div class="col-md-12"><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['DB_CONNECTION_INFO']->value['error_msg'];?>
<br><?php echo $_smarty_tpl->tpl_vars['DB_CONNECTION_INFO']->value['error_msg_info'];?>
</div></div></div><?php }?><div class="offset2 "><div class="table-responsive"><table class="config-table input-table"><caption class="sr-only"><?php echo \App\Language::translate('LBL_DATABASE_INFORMATION','Install');?>
</caption><thead><tr><th colspan="2"><span class="fas fa-database mr-2"></span><?php echo \App\Language::translate('LBL_DATABASE_INFORMATION','Install');?>
</th></tr></thead><tbody><tr><td><?php echo \App\Language::translate('LBL_DATABASE_TYPE','Install');?>
</td><td><?php echo \App\Language::translate('MySQL','Install');?>
</td></tr><tr><td class="<?php if (!$_smarty_tpl->tpl_vars['INFORMATION']->value['db_server']) {?>no<?php }?>"><?php echo \App\Language::translate('LBL_HOST_NAME','Install');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['db_server'];?>
</td></tr><tr><td class="<?php if (!$_smarty_tpl->tpl_vars['INFORMATION']->value['db_port']) {?>no<?php }?>"><?php echo \App\Language::translate('LBL_HOST_PORT','Install');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['db_port'];?>
</td></tr><tr><td class="<?php if (!$_smarty_tpl->tpl_vars['INFORMATION']->value['db_name']) {?>no<?php }?>"><?php echo \App\Language::translate('LBL_DB_NAME','Install');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['db_name'];?>
</td></tr><tr><td class="<?php if (!$_smarty_tpl->tpl_vars['INFORMATION']->value['db_username']) {?>no<?php }?>"><?php echo \App\Language::translate('LBL_USERNAME','Install');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['db_username'];?>
</td></tr></tbody></table></div><div class="table-responsive"><table class="config-table input-table"><caption class="sr-only"><?php echo \App\Language::translate('LBL_MORE_INFORMATION','Install');?>
</caption><thead><tr><th colspan="2"><span class="fas fa-tools mr-2"></span><?php echo \App\Language::translate('LBL_MORE_INFORMATION','Install');?>
</th></tr></thead><tbody><tr><td class="<?php if (!$_smarty_tpl->tpl_vars['INFORMATION']->value['site_URL']) {?>no<?php }?>"><?php echo \App\Language::translate('LBL_URL','Install');?>
</td><td><a href="#"><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['site_URL'];?>
</a></td></tr><tr><td class="<?php if (!$_smarty_tpl->tpl_vars['INFORMATION']->value['currency_name']) {?>no<?php }?>"><?php echo \App\Language::translate('LBL_CURRENCY','Install');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['currency_name'];?>
</td></tr></tbody></table></div><div class="table-responsive"><table class="config-table input-table"><caption class="sr-only"><?php echo \App\Language::translate('LBL_ADMIN_USER_INFORMATION','Install');?>
</caption><thead><tr><th colspan="2"><span class="fas fa-user-tie mr-2"></span><?php echo \App\Language::translate('LBL_ADMIN_USER_INFORMATION','Install');?>
</th></tr></thead><tbody><tr><td class="<?php if (!$_smarty_tpl->tpl_vars['INFORMATION']->value['firstname']) {?>no<?php }?>"><?php echo \App\Language::translate('LBL_FIRST_NAME','Install');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['firstname'];?>
</td></tr><tr><td class="<?php if (!$_smarty_tpl->tpl_vars['INFORMATION']->value['lastname']) {?>no<?php }?>"><?php echo \App\Language::translate('LBL_LAST_NAME','Install');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['lastname'];?>
</td></tr><tr><td class="<?php if (!$_smarty_tpl->tpl_vars['INFORMATION']->value['user_name']) {?>no<?php }?>"><?php echo \App\Language::translate('LBL_USERNAME','Install');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['user_name'];?>
</td></tr><tr><td class="<?php if (!$_smarty_tpl->tpl_vars['INFORMATION']->value['admin_email']) {?>no<?php }?>"><?php echo \App\Language::translate('LBL_EMAIL','Install');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['admin_email'];?>
</td></tr><tr><td class="<?php if (!$_smarty_tpl->tpl_vars['INFORMATION']->value['default_timezone']) {?>no<?php }?>"><?php echo \App\Language::translate('LBL_TIME_ZONE','Install');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['default_timezone'];?>
</td></tr><tr><td class="<?php if (!$_smarty_tpl->tpl_vars['INFORMATION']->value['dateformat']) {?>no<?php }?>"><?php echo \App\Language::translate('LBL_DATE_FORMAT','Install');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['dateformat'];?>
</td></tr></tbody></table></div><div class="table-responsive"><?php if (!empty($_smarty_tpl->tpl_vars['CONF_REPORT_RESULT']->value['database'])) {?><br><table class="config-table table u-word-break-all" data-type="database"><caption class="sr-only"><?php echo App\Language::translate('LBL_PHP_RECOMMENDED_SETTINGS','Install');?>
</caption><thead><tr><th><?php echo App\Language::translate('LBL_PARAMETER','Install');?>
</th><th><?php echo App\Language::translate('LBL_REQUIRED_VALUE','Install');?>
</th><th><?php echo App\Language::translate('LBL_PRESENT_VALUE','Install');?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONF_REPORT_RESULT']->value['database'], 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><tr data-key="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-status="<?php echo var_export($_smarty_tpl->tpl_vars['ITEM']->value['status']);?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'HIGHLIGHT_ROW', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value), true);?>
><td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HELP_TEXT', array('ITEM'=>$_smarty_tpl->tpl_vars['ITEM']->value,'KEY'=>$_smarty_tpl->tpl_vars['KEY']->value), true);?>
</td><?php if ((isset($_smarty_tpl->tpl_vars['ITEM']->value['recommended']))) {?><td><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['recommended'];?>
</td><td><?php if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['www'])) {
echo App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['www'],'ConfReport');
}?></td><?php } else { ?><td colspan="2"><?php if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['www'])) {
echo App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['www'],'ConfReport');
}?></td><?php }?></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><?php }?></div><div class="form-button-nav fixed-bottom button-container p-1 bg-light"><div class="text-center w-100"><a class="btn btn-lg c-btn-block-xs-down btn-danger mr-sm-1 mb-1 mb-sm-0" href="Install.php" role="button"><span class="fas fa-lg fa-arrow-circle-left mr-2"></span><?php echo App\Language::translate('LBL_BACK','Install');?>
</a><?php if (!$_smarty_tpl->tpl_vars['BREAK_INSTALL']->value) {?><button type="submit" class="btn btn-lg c-btn-block-xs-down btn-primary"><?php echo App\Language::translate('LBL_NEXT','Install');?>
<span class="fas fa-lg fa-arrow-circle-right ml-2"></span></button><?php }?></div></div></div></form></div></main></div>
<?php }
/* smarty_template_function_SHOW_HELP_TEXT_134792035363d660205c7e00_94476271 */
if (!function_exists('smarty_template_function_SHOW_HELP_TEXT_134792035363d660205c7e00_94476271')) {
function smarty_template_function_SHOW_HELP_TEXT_134792035363d660205c7e00_94476271(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('ITEM'=>array(),'KEY'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
if (empty($_smarty_tpl->tpl_vars['ITEM']->value['label'])) {
echo $_smarty_tpl->tpl_vars['KEY']->value;
} else {
echo \App\Language::translate(('LBL_LABEL_').($_smarty_tpl->tpl_vars['ITEM']->value['label']),'ConfReport');
}
if (!$_smarty_tpl->tpl_vars['ITEM']->value['status']) {
$_smarty_tpl->_assignInScope('HELP_TEXT', ('LBL_HELP_').(strtoupper(\App\Colors::sanitizeValue($_smarty_tpl->tpl_vars['KEY']->value))));
$_smarty_tpl->_assignInScope('HELP_TEXT_TRANS', \App\Language::translateEncodeHtml($_smarty_tpl->tpl_vars['HELP_TEXT']->value,'ConfReport'));
if (!empty($_smarty_tpl->tpl_vars['HELP_TEXT_TRANS']->value) && $_smarty_tpl->tpl_vars['HELP_TEXT_TRANS']->value !== $_smarty_tpl->tpl_vars['HELP_TEXT']->value) {?><a href="#" class="js-popover-tooltip float-right" data-js="popover" data-trigger="focus hover" data-placement="right" data-content="<?php echo $_smarty_tpl->tpl_vars['HELP_TEXT_TRANS']->value;?>
"><span class="fas fa-info-circle"></span></a><?php }
}
}}
/*/ smarty_template_function_SHOW_HELP_TEXT_134792035363d660205c7e00_94476271 */
/* smarty_template_function_HIGHLIGHT_ROW_134792035363d660205c7e00_94476271 */
if (!function_exists('smarty_template_function_HIGHLIGHT_ROW_134792035363d660205c7e00_94476271')) {
function smarty_template_function_HIGHLIGHT_ROW_134792035363d660205c7e00_94476271(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('ITEM'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
if (!$_smarty_tpl->tpl_vars['ITEM']->value['status'] && (empty($_smarty_tpl->tpl_vars['ITEM']->value['mode']) || $_smarty_tpl->tpl_vars['ITEM']->value['mode'] == 'showErrors')) {?>class="table-danger font-weight-bold js-wrong-status" data-js="length"<?php } elseif (!$_smarty_tpl->tpl_vars['ITEM']->value['status'] && (isset($_smarty_tpl->tpl_vars['ITEM']->value['mode'])) && $_smarty_tpl->tpl_vars['ITEM']->value['mode'] == 'showWarnings') {?>class="table-warning font-weight-bold js-wrong-status" data-js="length"<?php } elseif (!$_smarty_tpl->tpl_vars['ITEM']->value['status'] && (isset($_smarty_tpl->tpl_vars['ITEM']->value['mode'])) && $_smarty_tpl->tpl_vars['ITEM']->value['mode'] == 'showInfo') {?>class=""<?php }
}}
/*/ smarty_template_function_HIGHLIGHT_ROW_134792035363d660205c7e00_94476271 */
}
