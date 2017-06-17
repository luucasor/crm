<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
require_once('modules/Vtiger/models/Partner.php');
 
class Vtiger_Dashboard_View extends Vtiger_Index_View {
	
	private $responsibles = array();

	function checkPermission(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		if(!Users_Privileges_Model::isPermitted($moduleName, $actionName)) {
			throw new AppException(vtranslate('LBL_PERMISSION_DENIED'));
		}
	}

	function preProcess(Vtiger_Request $request, $display=true) {
		parent::preProcess($request, false);
		$viewer = $this->getViewer($request);
		$moduleName = $request->getModule();

		$dashBoardModel = Vtiger_DashBoard_Model::getInstance($moduleName);
		//check profile permissions for Dashboards
		$moduleModel = Vtiger_Module_Model::getInstance('Dashboard');
		$userPrivilegesModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();
		$permission = $userPrivilegesModel->hasModulePermission($moduleModel->getId());
		if($permission) {
			$widgets = $dashBoardModel->getSelectableDashboard();
		} else {
			$widgets = array();
		}

		$contactsubdetails = Vtiger_DashBoard_Model::getContactSubDetails();
		$contactscf        = Vtiger_DashBoard_Model::getContactscf();
		$potentialscf      = Vtiger_DashBoard_Model::getPotentialscf();
		$currentUser       = Users_Record_Model::getCurrentUserModel();
        $groups            = Users_Record_Model::getUserGroups($currentUser->getId());

		$filterDashboard   = Vtiger_DashBoard_Model::loadFilter($currentUser->getId());
		$cass = Partner_Model::getCAS($request);
		
		if($filterDashboard){
			$request->set('cas', $filterDashboard['cas']);		
			
			$partners = Partner_Model::getPartners($request);
			$request->set('partner', $filterDashboard['partner']);
			
			if($filterDashboard['partner'] != 'all'){
				$responsibles = Partner_Model::getUsersByGroup($request);
			}

			$viewer->assign('INITIALDATE', $filterDashboard['initialdate']);		
			$viewer->assign('FINALDATE', $filterDashboard['finaldate']);
			$viewer->assign('CAS_SELECTED', $filterDashboard['cas']);
			$viewer->assign('PARTNER_LIST', $partners);
			$viewer->assign('PARTNER_SELECTED', $filterDashboard['partner']);
			$viewer->assign('RESPONSIBLE_LIST', $responsibles);
			$viewer->assign('RESPONSIBLE_SELECTED', $filterDashboard['responsible']);
		} else {
			$viewer->assign('CAS_SELECTED', "Todos");
			$viewer->assign('PARTNER_SELECTED', "Todos");
			$viewer->assign('RESPONSIBLE_SELECTED', "Todos");
		}
		
		$viewer->assign('CAS_LIST', $cass);
        $viewer->assign('CURRENT_GROUPS', $groups);
		$viewer->assign('CURRENT_USER', $currentUser);
		$viewer->assign('CONTACT_SUB_DETAILS', $contactsubdetails);
		$viewer->assign('CONTACTS_CF', $contactscf);
		$viewer->assign('POTENTIALS_CF', $potentialscf);
		$viewer->assign('MODULE_PERMISSION', $permission);
		$viewer->assign('WIDGETS', $widgets);
		$viewer->assign('MODULE_NAME', $moduleName);
		if($display) {
			$this->preProcessDisplay($request);
		}
	}

	function preProcessTplName(Vtiger_Request $request) {
		return 'dashboards/DashBoardPreProcess.tpl';
	}

	function process(Vtiger_Request $request) {
		$viewer = $this->getViewer($request);
		$moduleName = $request->getModule();

		$dashBoardModel = Vtiger_DashBoard_Model::getInstance($moduleName);

		//check profile permissions for Dashboards
		$moduleModel = Vtiger_Module_Model::getInstance('Dashboard');
		$userPrivilegesModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();
		$permission = $userPrivilegesModel->hasModulePermission($moduleModel->getId());
		if($permission) {
			$widgets = $dashBoardModel->getDashboards();
		} else {
			return;
		}

		$viewer->assign('MODULE_NAME', $moduleName);
		$viewer->assign('WIDGETS', $widgets);
		$viewer->assign('CURRENT_USER', Users_Record_Model::getCurrentUserModel());
		$viewer->view('dashboards/DashBoardContents.tpl', $moduleName);
	}

	public function postProcess(Vtiger_Request $request) {
		parent::postProcess($request);
	}

	/**
	 * Function to get the list of Script models to be included
	 * @param Vtiger_Request $request
	 * @return <Array> - List of Vtiger_JsScript_Model instances
	 */
	public function getHeaderScripts(Vtiger_Request $request) {
		$headerScriptInstances = parent::getHeaderScripts($request);
		$moduleName = $request->getModule();

		$jsFileNames = array(
			'~/libraries/jquery/gridster/jquery.gridster.min.js',
			'~/libraries/jquery/jqplot/jquery.jqplot.min.js',
			'~/libraries/jquery/jqplot/plugins/jqplot.canvasTextRenderer.min.js',
			'~/libraries/jquery/jqplot/plugins/jqplot.canvasAxisTickRenderer.min.js',
                        '~/libraries/jquery/jqplot/plugins/jqplot.pieRenderer.min.js',
                        '~/libraries/jquery/jqplot/plugins/jqplot.barRenderer.min.js',
                        '~/libraries/jquery/jqplot/plugins/jqplot.categoryAxisRenderer.min.js',
			'~/libraries/jquery/jqplot/plugins/jqplot.pointLabels.min.js',
			'~/libraries/jquery/jqplot/plugins/jqplot.canvasAxisLabelRenderer.min.js',
			'~/libraries/jquery/jqplot/plugins/jqplot.funnelRenderer.min.js',
                        '~/libraries/jquery/jqplot/plugins/jqplot.barRenderer.min.js',
			'~/libraries/jquery/jqplot/plugins/jqplot.logAxisRenderer.min.js',
			'modules.Vtiger.resources.DashBoard',
			'modules.'.$moduleName.'.resources.DashBoard',
			'modules.Vtiger.resources.dashboards.Widget'
		);

		$jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
		$headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);
		return $headerScriptInstances;
	}

	/**
	 * Function to get the list of Css models to be included
	 * @param Vtiger_Request $request
	 * @return <Array> - List of Vtiger_CssScript_Model instances
	 */
	public function getHeaderCss(Vtiger_Request $request) {
		$parentHeaderCssScriptInstances = parent::getHeaderCss($request);

		$headerCss = array(
			'~/libraries/jquery/gridster/jquery.gridster.min.css',
			'~/libraries/jquery/jqplot/jquery.jqplot.min.css',
		);
		$cssScripts = $this->checkAndConvertCssStyles($headerCss);
		$headerCssScriptInstances = array_merge($parentHeaderCssScriptInstances , $cssScripts);
		return $headerCssScriptInstances;
	}
}