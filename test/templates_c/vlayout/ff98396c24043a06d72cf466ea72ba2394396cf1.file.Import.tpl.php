<?php /* Smarty version Smarty-3.1.7, created on 2016-09-22 12:10:12
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Calendar\Import.tpl" */ ?>
<?php /*%%SmartyHeaderCode:388657e3ca24845084-81383544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff98396c24043a06d72cf466ea72ba2394396cf1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Calendar\\Import.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '388657e3ca24845084-81383544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57e3ca248c4e2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e3ca248c4e2')) {function content_57e3ca248c4e2($_smarty_tpl) {?>
<div id="importRecordsContainer" class='modelContainer'><div class="modal-header"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">x</button><h3 id="importRecordHeader"><?php echo vtranslate('LBL_IMPORT_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><form method="POST" action="index.php" enctype="multipart/form-data" id="ical_import" name="ical_import"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" name="module"><div name='importRecordsContent'><input type="hidden" value="Import" name="view"><input type="hidden" value="importResult" name="mode"><div class="modal-body tabbable"><div class="tab-content massEditContent"><table class="massEditTable table table-bordered"><tr><td class="fieldLabel alignMiddle"><?php echo vtranslate('LBL_IMPORT_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td class="fieldValue"><input type="file" data-validation-engine="validate[required]" id="import_file" name="import_file" class="small"></td></tr></table></div></div></div><div class="modal-footer"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></form></div><?php }} ?>