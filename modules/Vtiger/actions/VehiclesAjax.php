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

require_once('modules/Vtiger/models/Vehicle.php');

class Vtiger_VehiclesAjax_Action extends Vtiger_IndexAjax_View {

	function __construct() {
		parent::__construct();
		$this->exposeMethod('getVehiclesAvaliables');
	}

	public function process(Vtiger_Request $request) {
		$mode = $request->get('mode');
		if(!empty($mode)) {
			$this->invokeExposedMethod($mode, $request);
			return;
		}
	}

	public function getVehiclesAvaliables(Vtiger_Request $request) {
		$currentUser  = Users_Record_Model::getCurrentUserModel();
		$id_reference = $request->get('id_reference');
		$tp_reference = $request->get('tp_reference');
		
		$vehiclesAvaliables = array();
		$vehiclesAvaliables = Vehicle_Model::getInstance()->getVehiclesAvailable($id_reference, $tp_reference);
		
		$arrayList = array();
		for ($i = 0; $i < count($vehiclesAvaliables); $i++) {
			
			$item = array(
						"id" => $vehiclesAvaliables[$i]->getId(),
						"id_reference" => $vehiclesAvaliables[$i]->getIdReference(),
						"tp_reference" => $vehiclesAvaliables[$i]->getTpReference(),
						"type" => $vehiclesAvaliables[$i]->getType(),
						"model" => $vehiclesAvaliables[$i]->getModel(), 
						"car_plate" => $vehiclesAvaliables[$i]->getCarPlate(),
						"year" => $vehiclesAvaliables[$i]->getYear(),
						"id_potential" => $vehiclesAvaliables[$i]->getIdPotential()
						);
			
			array_push($arrayList, $item);
		}
		
		$response = new Vtiger_Response();
		$response->setResult(array('vehiclesAvaliables' =>  $arrayList));
		$response->emit();
	}
}
