var SPMaskBehavior = function (val) {
  return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
spOptions = {
  onKeyPress: function(val, e, field, options) {
      field.mask(SPMaskBehavior.apply({}, arguments), options);
    }
};


jQuery(function($){
	
$('#Leads_editView_fieldName_mobile').mask(SPMaskBehavior, spOptions);

$("[data-field-type='mobile']").mask(SPMaskBehavior);
$("[data-field-type='phone']").mask("(00) 0000-0000"); 
   });