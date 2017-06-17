{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is:  vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}

{strip}
    {include file="EditViewBlocks.tpl"|@vtemplate_path:'Vtiger'}
    {include file="EditVehiclesView.tpl"|@vtemplate_path:$MODULE}
{/strip}
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
