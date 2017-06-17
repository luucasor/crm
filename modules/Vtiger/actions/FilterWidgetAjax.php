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

require_once('modules/Vtiger/models/Partner.php');

class Vtiger_FilterWidgetAjax_Action extends Vtiger_IndexAjax_View {

	function __construct() {
		parent::__construct();
		$this->exposeMethod('getPartners');
		$this->exposeMethod('getResponsibles');
		$this->exposeMethod('applyFilter');
	}

	public function process(Vtiger_Request $request) {
		$mode = $request->get('mode');
		if(!empty($mode)) {
			$this->invokeExposedMethod($mode, $request);
			return;
		}
	}

	public function applyFilter(Vtiger_Request $request) {
		$currentUser = Users_Record_Model::getCurrentUserModel();	
		$result = Vtiger_DashBoard_Model::setFilterByUser($request, $currentUser);

		$response = new Vtiger_Response();
		$response->setResult(array('Save' => $result));
		$response->emit();
	}

	public function getPartners(Vtiger_Request $request) {
        $partners = Partner_Model::getPartners($request);
		$response = new Vtiger_Response();
		$response->setResult(array('Save' => 'OK', 'partners' => $partners));
		$response->emit();
	}

	public function getResponsibles(Vtiger_Request $request) {
		$currentUser = Users_Record_Model::getCurrentUserModel();
		$responsibles = Partner_Model::getUsersByGroup($request);

		$response = new Vtiger_Response();
		$response->setResult(array('Save' => 'OK', 'responsibles' => $responsibles));
		$response->emit();
	}
}
