<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:08:36
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Field\Base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d661c401fd03_72885486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a92a35bab2f9e023762914655f692618bfaffb9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Field\\Base.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d661c401fd03_72885486 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Detail-Field-Base u-paragraph-m-0 u-word-break">
<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

</div>
<?php }
}
