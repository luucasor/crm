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

class Potentials_Save_Action extends Vtiger_Save_Action {

	public function process(Vtiger_Request $request) {
		//Restrict to store indirect relationship from Potentials to Contacts
		$sourceModule = $request->get('sourceModule');
		$relationOperation = $request->get('relationOperation');

		if ($relationOperation && $sourceModule === 'Contacts') {
			$request->set('relationOperation', false);
		}

		$this->processIntern($request);
	}
	
	public function processIntern(Vtiger_Request $request) {
		$recordModel = $this->saveRecord($request);
		$this->updateVehicles($recordModel->getId(), $request);
		
		if($request->get('relationOperation')) {
			$parentModuleName = $request->get('sourceModule');
			$parentRecordId = $request->get('sourceRecord');
			$parentRecordModel = Vtiger_Record_Model::getInstanceById($parentRecordId, $parentModuleName);
			//TODO : Url should load the related list instead of detail view of record
			$loadUrl = $parentRecordModel->getDetailViewUrl();
		} else if ($request->get('returnToList')) {
			$loadUrl = $recordModel->getModule()->getListViewUrl();
		} else {
			$loadUrl = $recordModel->getDetailViewUrl();
		}
		header("Location: $loadUrl");
	}
	
	public function updateVehicles($record, $request){
		$tpReference = $request->get('entity');
		if(empty($tpReference)){
			$tpReference = Vehicle_Model::getInstance()->getVehicleSource($record);
		}
		
		if(!empty($tpReference)){
			Vehicle_Model::getInstance()->updateVehicleSource($record, $tpReference);
			$activeVehicles = $this->getActiveVehicles($request);
			
			$idReference = ($tpReference == 'Contacts') ? $request->get('contact_id') : $request->get('related_to');
			Vehicle_Model::getInstance()->updateVehicles($record, $activeVehicles, $idReference, $tpReference);
		}
	}
	
	private function getActiveVehicles($request){
		$vehicles = $request->get('vehicles');
		
		$vehiclesActive = array();
		foreach($vehicles as $index => $value){
			$checked = isset($vehicles[$index]['checked']) ? true : false;
			if($checked){
				array_push($vehiclesActive, $vehicles[$index]);
			}
		}
		
		return $vehiclesActive;
	}
}
