<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * @@CUSTOM
 *************************************************************************************/
include_once 'vtlib/Vtiger/Field.php';

class Partners_Field_Model extends Vtiger_Field_Model {

   public function __construct() 
   { 
      parent::__construct();
   } 

	/**
	 * Function CUSTOM to get all the available picklist values for the current field
	 * @return <Array> List of picklist values if the field is of type picklist or multipicklist, null otherwise.
	 */
	public function getPicklistPartnersValues() {
            $picklistValues = Partners_Util_Helper::getPickListValues("groupname");
			foreach($picklistValues as $value) {
				$fieldPickListValues[$value] = vtranslate($value,$this->getModuleName());
			}
			return $fieldPickListValues;
    }
}