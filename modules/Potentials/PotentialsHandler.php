<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
function Potentials_updateContactClassification($entityData){
	$adb = PearDatabase::getInstance();
	$moduleName = $entityData->getModuleName();
	$contactid = after('x', $entityData->data['contact_id']);
	
	$sql = "UPDATE vtiger_contactscf 
            SET cf_891 = 'Prospect'  
            WHERE contactid = ?";
	$result = $adb->pquery($sql, array($contactid));
	return true;
}

function after($this, $inthat){
	if (!is_bool(strpos($inthat, $this)))
	return substr($inthat, strpos($inthat,$this)+strlen($this));
};

?>

