<?php /* Smarty version Smarty-3.1.7, created on 2017-01-20 12:01:15
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Accounts\EditViewBlocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299695881fc0b907036-65294753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25eb58cfb6548e842ba666bbb2e04c3c566f5b02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Accounts\\EditViewBlocks.tpl',
      1 => 1481893098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299695881fc0b907036-65294753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5881fc0b947cd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5881fc0b947cd')) {function content_5881fc0b947cd($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewBlocks.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditVehiclesView.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>

    picklistChange();

    $("#picklist_cf_1027").on("change", function() {
        picklistChange();
    });
    
    function picklistChange(){
        var picklist = document.getElementById("picklist_cf_1027");
        var itemSelecionado = picklist.options[picklist.selectedIndex].value;
        var campoOutros = $("#Contacts_editView_fieldName_cf_1029");
        var tituloCampoOutros = $("#label_cf_1029");

        if (itemSelecionado === 'Outros') {
            tituloCampoOutros.show();
            campoOutros.prop("required", "true");
            campoOutros.show();
            campoOutros.focus();
        } else {
            tituloCampoOutros.hide();
            campoOutros.prop("required", "");
            campoOutros.hide();
        }
        return false;
    }
    
    focusFirstName();
    
    function focusFirstName(){
        var firstname = $("#Contacts_editView_fieldName_firstname");
        firstname.focus();
        firstname.val(firstname.val());
    }


</script>
<?php }} ?>