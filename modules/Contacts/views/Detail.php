<?php

/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */
require_once('modules/Vtiger/models/Vehicle.php');

class Contacts_Detail_View extends Accounts_Detail_View {

	function __construct() {
		parent::__construct();
	}

	public function process(Vtiger_Request $request) {
			$moduleName = $request->getModule();
			$recordId = $request->get('record');
                        
			$viewer = $this->getViewer($request);
			$viewer->assign('VEHICLES', Vehicle_Model::getInstance()->getVehicles($request));
            $viewer->assign('POTENTIALS', $this->getPotentialsBy($recordId));
			
			parent::process($request);
	}

	private function getPotentialsBy($recordId){
		global $adb;
		
		$sql = "select * from  vtiger_potential where contact_id = ? order by closingdate";
		$result = $adb->pquery($sql, array($recordId));
		
		//$potentialname = $adb->query_result($result,0,"potentialname");
		return $result;
	}
        
	public function showModuleDetailView(Vtiger_Request $request) {
		$recordId = $request->get('record');
		$moduleName = $request->getModule();

		$recordModel = Vtiger_Record_Model::getInstanceById($recordId, $moduleName);

		$viewer = $this->getViewer($request);
		$viewer->assign('IMAGE_DETAILS', $recordModel->getImageDetails());

		return parent::showModuleDetailView($request);
	}
}
