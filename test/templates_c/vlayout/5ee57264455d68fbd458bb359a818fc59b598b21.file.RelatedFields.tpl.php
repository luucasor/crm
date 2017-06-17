<?php /* Smarty version Smarty-3.1.7, created on 2016-09-13 14:13:31
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Reports\RelatedFields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3062857d8098af33b47-02496640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ee57264455d68fbd458bb359a818fc59b598b21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Reports\\RelatedFields.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3062857d8098af33b47-02496640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'PRIMARY_MODULE_FIELDS' => 0,
    'PRIMARY_MODULE' => 0,
    'PRIMARY_MODULE_NAME' => 0,
    'BLOCK_LABEL' => 0,
    'BLOCK' => 0,
    'FIELD_KEY' => 0,
    'SELECTED_SORT_FIELD_KEY' => 0,
    'FIELD_LABEL' => 0,
    'SECONDARY_MODULE_FIELDS' => 0,
    'SECONDARY_MODULE' => 0,
    'SECONDARY_MODULE_NAME' => 0,
    'ROW_VAL' => 0,
    'ROW' => 0,
    'SELECTED_SORT_FIELD_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57d8098b0ab48',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d8098b0ab48')) {function content_57d8098b0ab48($_smarty_tpl) {?>
<span class="span6"><div class="row-fluid"><select class="chzn-select span11 selectedSortFields"><option value="none"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['PRIMARY_MODULE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PRIMARY_MODULE']->_loop = false;
 $_smarty_tpl->tpl_vars['PRIMARY_MODULE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PRIMARY_MODULE_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PRIMARY_MODULE']->key => $_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value){
$_smarty_tpl->tpl_vars['PRIMARY_MODULE']->_loop = true;
 $_smarty_tpl->tpl_vars['PRIMARY_MODULE_NAME']->value = $_smarty_tpl->tpl_vars['PRIMARY_MODULE']->key;
?><?php  $_smarty_tpl->tpl_vars['BLOCK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BLOCK']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK']->key => $_smarty_tpl->tpl_vars['BLOCK']->value){
$_smarty_tpl->tpl_vars['BLOCK']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value = $_smarty_tpl->tpl_vars['BLOCK']->key;
?><optgroup label='<?php echo vtranslate($_smarty_tpl->tpl_vars['PRIMARY_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
-<?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['PRIMARY_MODULE_NAME']->value);?>
'><?php  $_smarty_tpl->tpl_vars['FIELD_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BLOCK']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_LABEL']->key => $_smarty_tpl->tpl_vars['FIELD_LABEL']->value){
$_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_KEY']->value = $_smarty_tpl->tpl_vars['FIELD_LABEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_KEY']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_KEY']->value==$_smarty_tpl->tpl_vars['SELECTED_SORT_FIELD_KEY']->value){?>selected=""<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['PRIMARY_MODULE_NAME']->value);?>
</option><?php } ?></optgroup><?php } ?><?php } ?><?php  $_smarty_tpl->tpl_vars['SECONDARY_MODULE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SECONDARY_MODULE']->_loop = false;
 $_smarty_tpl->tpl_vars['SECONDARY_MODULE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SECONDARY_MODULE_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SECONDARY_MODULE']->key => $_smarty_tpl->tpl_vars['SECONDARY_MODULE']->value){
$_smarty_tpl->tpl_vars['SECONDARY_MODULE']->_loop = true;
 $_smarty_tpl->tpl_vars['SECONDARY_MODULE_NAME']->value = $_smarty_tpl->tpl_vars['SECONDARY_MODULE']->key;
?><?php  $_smarty_tpl->tpl_vars['BLOCK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BLOCK']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SECONDARY_MODULE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK']->key => $_smarty_tpl->tpl_vars['BLOCK']->value){
$_smarty_tpl->tpl_vars['BLOCK']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value = $_smarty_tpl->tpl_vars['BLOCK']->key;
?><optgroup label='<?php echo vtranslate($_smarty_tpl->tpl_vars['SECONDARY_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
-<?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['SECONDARY_MODULE_NAME']->value);?>
'><?php  $_smarty_tpl->tpl_vars['FIELD_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BLOCK']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_LABEL']->key => $_smarty_tpl->tpl_vars['FIELD_LABEL']->value){
$_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_KEY']->value = $_smarty_tpl->tpl_vars['FIELD_LABEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_KEY']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_KEY']->value==$_smarty_tpl->tpl_vars['SELECTED_SORT_FIELD_KEY']->value){?>selected=""<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['SECONDARY_MODULE_NAME']->value);?>
</option><?php } ?></optgroup><?php } ?><?php } ?></select></div></span><span class="span6"><div class="row-fluid"><span class="span6"><?php $_smarty_tpl->tpl_vars['ROW'] = new Smarty_variable(('row_').($_smarty_tpl->tpl_vars['ROW_VAL']->value), null, 0);?><input style='margin:5px;' type="radio" name="<?php echo $_smarty_tpl->tpl_vars['ROW']->value;?>
" class="sortOrder" value="Ascending" <?php if ($_smarty_tpl->tpl_vars['SELECTED_SORT_FIELD_VALUE']->value=='Ascending'){?> checked="" <?php }?> />&nbsp;<span><?php echo vtranslate('LBL_ASCENDING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>&nbsp;&nbsp;<input style='margin:5px;'type="radio" name="<?php echo $_smarty_tpl->tpl_vars['ROW']->value;?>
" class="sortOrder" value="Descending" <?php if ($_smarty_tpl->tpl_vars['SELECTED_SORT_FIELD_VALUE']->value=='Descending'){?> checked="" <?php }?>/>&nbsp;<span><?php echo vtranslate('LBL_DESCENDING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span></div></span><?php }} ?>