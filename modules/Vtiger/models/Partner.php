<?php

class Partner_Model extends PearDatabase {

    public static function getPartners(Vtiger_Request $request) {
        $adb = PearDatabase::getInstance();

		$cas = $request->get('cas');
		$primaryKey = "partnersid";
		$fieldName = "contatoparceiro";
		$where = "";
		
		if($cas != "all")
			$where = " CF.cf_1093 LIKE '".$cas."' AND ";
		
        $sql = "SELECT PAR.".$primaryKey.", PAR.".$fieldName." FROM vtiger_partners AS PAR
					INNER JOIN vtiger_partnerscf AS CF ON (CF.partnersid = PAR.partnersid)
					INNER JOIN vtiger_crmentity AS ENT ON (ENT.crmid = PAR.partnersid)
				WHERE 
					".$where."
					ENT.deleted = 0 AND
					CF.cf_1095 != ''";

        $partners = array(0 => array('value' => 'all', 'text' => 'Todos'));
		
        $result = $adb->pquery($sql);
		$i = 1;

		while(!$result->EOF) {
			$partnersid = $result->fields('partnersid');
			$contatoparceiro = $result->fields('contatoparceiro');
			$reg = array('value' => $partnersid, 'text' => decode_html($contatoparceiro));
			array_push($partners, $reg);
			$i++;
			$result->MoveNext();
		}

        return $partners;
    }

	public static function getUsersByGroup(Vtiger_Request $request) {
		$partnersid = $request->get('partner');
		$groupName = Partner_Model::getGroupName($partnersid);
		$responsibles = Partner_Model::getResponsibles($groupName);
		return $responsibles;
	}

	public static function getGroupName($partnersid){
        $adb = PearDatabase::getInstance();
		$sql = "SELECT cf_1095 
				FROM vtiger_partnerscf 
				WHERE
					partnersid = ".$partnersid;
        $result = $adb->pquery($sql);
		
		if(!$result->EOF){
			return $result->fields('cf_1095');
		}
		
		return null;
	}

	public static function getResponsibles($groupName){
        $adb = PearDatabase::getInstance();
		$sql = "SELECT US.id, concat(US.first_name,' ', US.last_name) AS name 
				FROM vtiger_users2group AS UG
						INNER JOIN vtiger_users AS US ON (UG.userid = US.id)
				WHERE 
					groupid IN (SELECT groupid FROM vtiger_groups WHERE groupname LIKE '".$groupName."') AND
					deleted = 0
			   ";
			   
        $responsibles = array(0 => array('value' => 'all', 'text' => 'Todos'));
		$result = $adb->pquery($sql);
		$i = 1;
		while(!$result->EOF) {
			//$id = $result->fields('id');
			$name = $result->fields('name');
			$reg = array('value' => $name, 'text' => decode_html($name));
			array_push($responsibles, $reg);
			$i++;
			$result->MoveNext();
		}
		return $responsibles;
	}
	
	public static function getCAS(){
		$adb = PearDatabase::getInstance();
		$sql = "SELECT cf_1093id, cf_1093 FROM vtiger_cf_1093";
		$cass = array(0 => array('value' => 'all', 'text' => 'Todos'));
		
		$result = $adb->pquery($sql);
		
		$i = 1;
		while(!$result->EOF) {
			$value = $result->fields('cf_1093id');
			$text = $result->fields('cf_1093');
			$reg = array('value' => $value, 'text' => decode_html($text));
			array_push($cass, $reg);
			$i++;
			$result->MoveNext();
		}
		return $cass;
	}
}
