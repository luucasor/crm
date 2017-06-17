<?php /* Smarty version Smarty-3.1.7, created on 2016-12-14 11:06:16
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Calendar\MassEditForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19039585127a8892032-56191601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a37c41926a93c241b6fb4003bfbb4f3460c80a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Calendar\\MassEditForm.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19039585127a8892032-56191601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'PICKIST_DEPENDENCY_DATASOURCE' => 0,
    'CVID' => 0,
    'SELECTED_IDS' => 0,
    'EXCLUDED_IDS' => 0,
    'SEARCH_KEY' => 0,
    'OPERATOR' => 0,
    'ALPHABET_VALUE' => 0,
    'SEARCH_PARAMS' => 0,
    'MASS_EDIT_FIELD_DETAILS' => 0,
    'massEditFields' => 0,
    'RECORD_STRUCTURE_MODEL' => 0,
    'FIELD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_585127a892b0e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585127a892b0e')) {function content_585127a892b0e($_smarty_tpl) {?>
<div id="massEditContainer contentsBackground" class='modelContainer'><div class="modal-header"><button type="button" class="close " data-dismiss="modal" aria-hidden="true">&times;</button><h3 id="massEditHeader"><?php echo vtranslate('LBL_CHANGE_OWNER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><form class="form-horizontal calendarMassEdit" id="massEdit" name="MassEdit" method="post" action="index.php"><?php if (!empty($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value)){?><input type="hidden" name="picklistDependency" value='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value);?>
' /><?php }?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="MassSave" /><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
" /><input type="hidden" name="selected_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value);?>
><input type="hidden" name="excluded_ids" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value);?>
'><input type="hidden" name="search_key" value= "<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEY']->value;?>
" /><input type="hidden" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['OPERATOR']->value;?>
" /><input type="hidden" name="search_value" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" /><input type="hidden" name="search_params" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value);?>
' /><?php $_smarty_tpl->tpl_vars['massEditFields'] = new Smarty_variable(array("assigned_user_id"=>$_smarty_tpl->tpl_vars['MASS_EDIT_FIELD_DETAILS']->value['assigned_user_id']), null, 0);?><input type="hidden" id="massEditFieldsNameList" data-value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['massEditFields']->value));?>
' /><div class="controlElements padding20px"><div class="row-fluid"><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getModule()->getField('assigned_user_id'), null, 0);?><span class="span3"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><span class=""></span><span class="span9 offset2"><input type="hidden" name="assigned_user_id_mass_edit_check" value="on"/><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value), 0);?>
</span></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div><?php }} ?>