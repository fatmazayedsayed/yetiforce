<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:08:36
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Field\Text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661c41b14d4_50451302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c89e934457024767b66ac57f633ad2b8c4d45312' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Field\\Text.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661c41b14d4_50451302 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Detail-Field-Text --><?php $_smarty_tpl->_assignInScope('SIZE', 'mini');
if ($_smarty_tpl->tpl_vars['SOURCE_TPL']->value == 'BlockView') {
$_smarty_tpl->_assignInScope('SIZE', 'medium');
}?><div class="u-paragraph-m-0 u-word-break"><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value,false,$_smarty_tpl->tpl_vars['SIZE']->value);?>
</div><!-- /tpl-Detail-Field-Text -->
<?php }
}
