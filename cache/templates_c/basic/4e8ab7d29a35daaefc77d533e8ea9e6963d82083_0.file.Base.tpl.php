<?php
/* Smarty version 4.2.0, created on 2023-01-29 14:07:03
  from 'D:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\List\Field\Base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63d66167d72509_64124359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e8ab7d29a35daaefc77d533e8ea9e6963d82083' => 
    array (
      0 => 'D:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\List\\Field\\Base.tpl',
      1 => 1660909119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d66167d72509_64124359 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-List-Field-Base --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
if ((isset($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']))) {
$_smarty_tpl->_assignInScope('SEARCH_VALUE', $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']);
} else {
$_smarty_tpl->_assignInScope('SEARCH_VALUE', '');
}?><div class="searchField <?php if ((isset($_smarty_tpl->tpl_vars['CLASS_SIZE']->value))) {
echo $_smarty_tpl->tpl_vars['CLASS_SIZE']->value;
}?> u-min-w-150pxr"><?php if (!empty($_smarty_tpl->tpl_vars['MODULE_MODEL']->value) && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getAlphabetSearchField() == $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()) {?><div class="input-group col-12 px-0"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" <?php if (!empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name'))) {?> data-source-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name');?>
" data-module-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
" <?php }?> class="listSearchContributor form-control" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_VALUE']->value;?>
" title='<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName());?>
' data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' /><div class="input-group-append alphabetBtnContainer"><?php if (empty($_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value)) {?><button class=" btn btn-outline-secondary alphabetBtn" type="button"><span class="fas fa-font" aria-hidden="true"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_ALPHABETIC_FILTERING');?>
</span></button><?php } else { ?><button class=" btn btn-primary alphabetBtn" type="button"><?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
</button><?php }?></div></div><?php } else { ?><div class="input-group"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" <?php if (!empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name'))) {?> data-source-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name');?>
" data-module-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
"<?php }?> class="listSearchContributor form-control" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_VALUE']->value;?>
" title='<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName());?>
' data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->searchLockedEmptyFields() || !$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveSearchView()) {?>disabled<?php }?> /><?php if (!empty($_smarty_tpl->tpl_vars['MODULE_MODEL']->value) && (isset($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isentitytype))) {?><div class="input-group-append"><div class="input-group-text px-1"><input type="checkbox" class="js-empty-value" <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->searchLockedEmptyFields()) {?>checked<?php }?> <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveSearchView()) {?>disabled<?php }?>></div></div><?php }?></div><?php }?></div><!-- /tpl-List-Field-Base -->
<?php }
}
