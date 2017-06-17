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
require_once('modules/Vtiger/models/Potential.php');
require_once('modules/Vtiger/models/Contact.php');

class Potentials_Detail_View extends Vtiger_Detail_View {

    function __construct() {
        parent::__construct();
        $this->exposeMethod('showRelatedRecords');
    }

    function process(Vtiger_Request $request) {
        $mode = $request->getMode();
        if (!empty($mode)) {
            echo $this->invokeExposedMethod($mode, $request);
            return;
        }

        $currentUserModel = Users_Record_Model::getCurrentUserModel();

        if ($currentUserModel->get('default_record_view') === 'Summary') {
            echo $this->showModuleBasicView($request);
        } else {
            echo $this->showModuleDetailView($request);
        }
    }

    function showModuleBasicView($request) {
        $recordId = $request->get('record');
        $moduleName = $request->getModule();

        if (!$this->record) {
            $this->record = Vtiger_DetailView_Model::getInstance($moduleName, $recordId);
        }
        $recordModel = $this->record->getRecord();

        $detailViewLinkParams = array('MODULE' => $moduleName, 'RECORD' => $recordId);
        $detailViewLinks = $this->record->getDetailViewLinks($detailViewLinkParams);

        $idcontact = Potential_Model::getInstance()->getIdContacts($recordId);
        $contact = Contact_Model::getInstance()->getContact($idcontact[0]);
		$vehicle_source = Vehicle_Model::getInstance()->getVehicleSource($recordId);
		$vehicle_source = empty($vehicle_source) ? "Contacts" : $vehicle_source;
        $vehicles = Vehicle_Model::getInstance()->getVehiclesBy($idcontact[0], $vehicle_source);
		
        $viewer = $this->getViewer($request);
        
        $viewer->assign('CONTACT', $contact);
        $viewer->assign('VEHICLES', $vehicles);
        $viewer->assign('RECORD', $recordModel);
        $viewer->assign('MODULE_SUMMARY', $this->showModuleSummaryView($request));

        $viewer->assign('DETAILVIEW_LINKS', $detailViewLinks);
        $viewer->assign('USER_MODEL', Users_Record_Model::getCurrentUserModel());
        $viewer->assign('IS_AJAX_ENABLED', $this->isAjaxEnabled($recordModel));
        $viewer->assign('MODULE_NAME', $moduleName);

        $recordStrucure = Vtiger_RecordStructure_Model::getInstanceFromRecordModel($recordModel, Vtiger_RecordStructure_Model::RECORD_STRUCTURE_MODE_DETAIL);
        $structuredValues = $recordStrucure->getStructure();

        $moduleModel = $recordModel->getModule();

        $viewer->assign('RECORD_STRUCTURE', $structuredValues);
        $viewer->assign('BLOCK_LIST', $moduleModel->getBlocks());

        echo $viewer->view('DetailViewSummaryContents.tpl', $moduleName, true);
    }

    function showModuleDetailView(Vtiger_Request $request) {
        $recordId = $request->get('record');
        $moduleName = $request->getModule();

        if (!$this->record) {
            $this->record = Vtiger_DetailView_Model::getInstance($moduleName, $recordId);
        }
        $recordModel = $this->record->getRecord();
        $recordStrucure = Vtiger_RecordStructure_Model::getInstanceFromRecordModel($recordModel, Vtiger_RecordStructure_Model::RECORD_STRUCTURE_MODE_DETAIL);
        $structuredValues = $recordStrucure->getStructure();

        $moduleModel = $recordModel->getModule();
        $idcontact = Potential_Model::getInstance()->getIdContacts($recordId);
        $contact = Contact_Model::getInstance()->getContact($idcontact[0]);
        //$vehicles = Vehicle_Model::getInstance()->getVehiclesByPotential($recordId);
		$vehicle_source = Vehicle_Model::getInstance()->getVehicleSource($recordId);
		$vehicle_source = empty($vehicle_source) ? "Contacts" : $vehicle_source;
        $vehicles = Vehicle_Model::getInstance()->getVehiclesBy($idcontact[0], $vehicle_source);
        
        $viewer = $this->getViewer($request);
        $viewer->assign('CONTACT', $contact);
        $viewer->assign('VEHICLES', $vehicles);
        
        $viewer->assign('RECORD', $recordModel);
        $viewer->assign('RECORD_STRUCTURE', $structuredValues);
        $viewer->assign('BLOCK_LIST', $moduleModel->getBlocks());
        $viewer->assign('USER_MODEL', Users_Record_Model::getCurrentUserModel());
        $viewer->assign('MODULE_NAME', $moduleName);
        $viewer->assign('IS_AJAX_ENABLED', $this->isAjaxEnabled($recordModel));

        return $viewer->view('DetailViewFullContents.tpl', $moduleName, true);
    }

    /**
     * Function to get activities
     * @param Vtiger_Request $request
     * @return <List of activity models>
     */
    public function getActivities(Vtiger_Request $request) {
        $moduleName = 'Calendar';
        $moduleModel = Vtiger_Module_Model::getInstance($moduleName);

        $currentUserPriviligesModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();
        if ($currentUserPriviligesModel->hasModulePermission($moduleModel->getId())) {
            $moduleName = $request->getModule();
            $recordId = $request->get('record');

            $pageNumber = $request->get('page');
            if (empty($pageNumber)) {
                $pageNumber = 1;
            }
            $pagingModel = new Vtiger_Paging_Model();
            $pagingModel->set('page', $pageNumber);
            $pagingModel->set('limit', 10);

            if (!$this->record) {
                $this->record = Vtiger_DetailView_Model::getInstance($moduleName, $recordId);
            }
            $recordModel = $this->record->getRecord();
            $moduleModel = $recordModel->getModule();

            $relatedActivities = $moduleModel->getCalendarActivities('', $pagingModel, 'all', $recordId);

            $viewer = $this->getViewer($request);
            $viewer->assign('RECORD', $recordModel);
            $viewer->assign('MODULE_NAME', $moduleName);
            $viewer->assign('PAGING_MODEL', $pagingModel);
            $viewer->assign('PAGE_NUMBER', $pageNumber);
            $viewer->assign('ACTIVITIES', $relatedActivities);

            return $viewer->view('RelatedActivities.tpl', $moduleName, true);
        }
    }

}
