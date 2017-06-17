 
    function picklistChange(fieldName, customField, items){
        var itemSelecionado = $("[name='"+fieldName+"'] option:selected").val();
        
		var field = $("[name='"+customField+"']");
        var label = $("#label_"+customField);
		
		validation(itemSelecionado, label, field, items);

        return false;
    }
	
	
	function validation(itemSelecionado, label, field, items){
		var resultado  = items.some(function (elemento) {
			return elemento.item === itemSelecionado;
		});
	
		//console.log("Resultado é::  "+resultado);
	
		showHide(resultado, label, field);
	}
	
	function checkboxChange(value, customField){
		
		var field = $("[name='"+customField+"']");
        var label = $("#label_"+customField);
		
		showHide(value, label, field);
	}	
	
	function showHide(value, label, field){
		if (value) {
              label.show();
              field.attr("data-validation-engine", "validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]");
              field.show();
              field.focus();
        } else {
              label.hide();
              field.attr("data-validation-engine", "");
              field.hide();
        }
	}
	
	function focusFirstName(){
        var firstname = $("#Contacts_editView_fieldName_firstname");
        firstname.focus();
        firstname.val(firstname.val());
    }